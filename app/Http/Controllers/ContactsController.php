<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
use App\Models\Team;

class ContactsController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();

        
        
        $contact = new Contact;
        $contact->type = $request->type;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->user_id = $user->id;
        $contact->ticket = $request->ticket;
        $contact->date = $request->date;
        $contact->message = $request->message;
        if($request->hasFile('file')){ 
            $file = $request->file('file');

            $uniqueFileName = uniqid() . $file->getClientOriginalName();
            $file->move(public_path() . '/uploads', $uniqueFileName);
            $contact->filename = $uniqueFileName;
        }
        $contact->save();

        

        return redirect('contacts');
    }
}
