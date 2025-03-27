<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactCreateRequest;
use App\Models\Contact;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    public function index()
    {
        return view('crud.contact.index');
    }

    public function ContactTable(Request $req)
    {
        $contact = Contact::where('deleted_at', null);



        return DataTables::eloquent($contact)
            ->only([
                'id',
                'name',
                'email',
                'phone',
                'created_at',
                'action',
            ])
            ->addIndexColumn()
            ->addColumn('created_at', function ($row) {
                $datetime = date('Y-m-d H:i:s', strtotime($row->created_at));
                return $datetime;
            })
            ->addColumn('action', function ($row) {
                return '<button class="btn btn-sm btn-primary mr-2" onclick="editContact(' . $row->id . ')"><i class=" mdi mdi-square-edit-outline "></i></button>
                <button class="btn btn-sm btn-danger" onclick="deleteContact(' . $row->id. ')"><i class=" mdi mdi-trash-can-outline "></i></button>';
            })

            ->rawColumns([
                'action', 'created_at'])
            ->toJson();
    }

    public function ContactCreate(ContactCreateRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->phone = $req->phone;
        $contact->save();
        return response()->json([
            'success' => true,
            'message' => "Contact Berhasil Ditambahkan",
        ], 200);
    }

    public function ContactDelete(Request $req)
    {
        $contact = Contact::where('id', $req->id_delete)->first();
        $contact->deleted_at = now();
        $contact->save();
        return response()->json([
            'success' => true,
            'message' => "Berhasil dihapus",
        ], 200);
    }



    public function ContactUpdate(ContactCreateRequest $req)
    {
        $contact = Contact::where('id', $req->id)->first();
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->phone = $req->phone;
        $contact->save();
        return response()->json([
            'success' => true,
            'message' => "About Berhasil diperbarui",
        ], 200);
    }
}
