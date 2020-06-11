<?php

namespace App\Http\Controllers;
use App\GoogleContact;

class ContactController extends Controller
{

    public function getAllContacts()
    {
        return response()->json(GoogleContact::all());
    }

    public function createContacts(Request $request)
    {
        $contact = GoogleContact::create($request->all());
        return response()->json($contact, 201);
    }


    public function deleteContact($id)
    {
        GoogleContact::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    public function searchContacts(Request $request)
    {
        $searchTerm = '%'.$request->search.'%';
        $contacts = GoogleContact::where('name', 'like', $searchTerm)
                                ->orWhere('email', 'like', $searchTerm)
                                ->orWhere('house_address', 'like',$searchTerm)
                                ->get();
        return response()->json($contacts);
    }

}
