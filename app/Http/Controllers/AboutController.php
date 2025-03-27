<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Requests\AboutCreateRequest;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class AboutController extends Controller
{
    public function index()
    {
        return view('crud.about.index');
    }


    public function AboutTable(Request $req)
    {
        $about = About::where('deleted_at', null);



        return DataTables::eloquent($about)
            ->only([
                'id',
                'description',
                'created_at',
                'action',
            ])
            ->addIndexColumn()
            ->addColumn('created_at', function ($row) {
                $datetime = date('Y-m-d H:i:s', strtotime($row->created_at));
                return $datetime;
            })
            ->addColumn('action', function ($row) {
                return '<button class="btn btn-sm btn-primary mr-2" onclick="editAbout(' . $row->id . ')"><i class=" mdi mdi-square-edit-outline "></i></button>
                <button class="btn btn-sm btn-danger" onclick="deleteAbout(' . $row->id. ')"><i class=" mdi mdi-trash-can-outline "></i></button>';
            })

            ->rawColumns([
                'action', 'created_at'])
            ->toJson();
    }

    public function AboutCreate(AboutCreateRequest $req)
    {
        $about = new About();
        $about->description = $req->description;
        $about->save();
        return response()->json([
            'success' => true,
            'message' => "About Berhasil Ditambahkan",
        ], 200);
    }

    public function AboutDelete(Request $req)
    {
        $about = About::where('id', $req->id_delete)->first();
        $about->deleted_at = now();
        $about->save();
        return response()->json([
            'success' => true,
            'message' => "Berhasil dihapus",
        ], 200);
    }



    public function AboutUpdate(AboutCreateRequest $req)
    {
        $about = About::where('id', $req->id)->first();
        $about->description = $req->description;
        $about->save();
        return response()->json([
            'success' => true,
            'message' => "About Berhasil diperbarui",
        ], 200);
    }
}
