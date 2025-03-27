<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductCreateRequest;
use Yajra\DataTables\Facades\DataTables;


class ProductController extends Controller
{
    public function index()
    {
        return view('crud.product.index');
    }

    public function ProductTable(Request $req)
    {
        $about = Product::where('deleted_at', null);



        return DataTables::eloquent($about)
            ->only([
                'id',
                'name',
                'gambar',
                'description',
                'created_at',
                'action',
            ])
            ->addIndexColumn()
            ->addColumn('created_at', function ($row) {
                $datetime = date('Y-m-d H:i:s', strtotime($row->created_at));
                return $datetime;
            })
            ->addColumn('gambar', function ($row) {
                $year = date('Y', strtotime($row->created_at));
                $month = date('F', strtotime($row->created_at));
                $filePath = $row->gambar;
                $gambar = asset('/assets/logo/' . $year . '/' . $month . '/' . $filePath);

                return '<a href="'.$gambar.'" data-lightbox="gallery" data-title="Product Image">
                    <img src="'.$gambar.'" alt="Product Image" width="50" height="50" class="img-thumbnail">
                </a>';
            
            })
            ->addColumn('action', function ($row) {
                return '<button class="btn btn-sm btn-primary mr-2" onclick="editProduct(' . $row->id . ')"><i class=" mdi mdi-square-edit-outline "></i></button>
                <button class="btn btn-sm btn-danger" onclick="deleteProduct(' . $row->id. ')"><i class=" mdi mdi-trash-can-outline "></i></button>';
            })

            ->rawColumns([
                'action', 'created_at','gambar'])
            ->toJson();
    }

    public function ProductCreate (ProductCreateRequest $request)
    {
        $year = date('Y');
        $month = date('F');

        // Define the directory path dynamically
        $directory = public_path("/assets/logo/{$year}/{$month}");

        // Ensure the directory exists
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        $timestamp = now()->format('Ymd_His'); // Get current datetime (YYYYMMDD_HHMMSS)

        $gambar = $request->file('gambar');
        $nama = $timestamp . '_' . rand() . '.' . $request->file('gambar')->extension();
        $uploadgambar = $gambar->move($directory, $nama)->getFilename();


        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->gambar = $uploadgambar;
        $product->save();

        return response()->json([
            'success' => true,
            'message' => "Product Berhasil Diunggah!",
            'redirect' => route('product.view'),
        ]);
    }

    public function ProductDelete(Request $req)
    {
        $product = Product::where('id', $req->id_delete)->first();
        $product->deleted_at = now();
        $product->save();
        return response()->json([
            'success' => true,
            'message' => "Berhasil dihapus",
        ], 200);
    }



    // public function ProductUpdate(ProductCreateRequest $req)
    // {
    //     $year = date('Y');
    //     $month = date('F');

    //     // Define the directory path dynamically
    //     $directory = public_path("/assets/logo/{$year}/{$month}");

    //     // Ensure the directory exists
    //     if (!file_exists($directory)) {
    //         mkdir($directory, 0777, true);
    //     }

    //     $timestamp = now()->format('Ymd_His'); // Get current datetime (YYYYMMDD_HHMMSS)

    //     $gambar = $req->file('gambar');
    //     $nama = $timestamp . '_' . rand() . '.' . $req->file('gambar')->extension();
    //     $uploadgambar = $gambar->move($directory, $nama)->getFilename();

    //     $product = Product::where('id', $req->id)->first();
    //     $product->name = $req->name;
    //     $product->description = $req->description;
    //     $product->gambar = $uploadgambar;
    //     $product->save();
    //     return response()->json([
    //         'success' => true,
    //         'message' => "Product Berhasil diperbarui",
    //     ], 200);
    // }

    public function ProductUpdate(ProductCreateRequest $request)
{
    $product = Product::findOrFail($request->id);

    $product->name = $request->name;
    $product->description = $request->description;

    if ($request->hasFile('gambar')) {
        $year = date('Y');
        $month = date('F');

        $directory = public_path("/assets/logo/{$year}/{$month}");
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        $timestamp = now()->format('Ymd_His');
        $gambar = $request->file('gambar');
        $namaFile = $timestamp . '_' . rand() . '.' . $gambar->extension();
        $gambar->move($directory, $namaFile);

        $product->gambar = $namaFile;
    }

    $product->save();

    return response()->json(['message' => 'Product updated successfully!']);
}

}
