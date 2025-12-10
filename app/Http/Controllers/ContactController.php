<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){ return view('contact.index'); }
    public function store(Request $req){
        $data = $req->validate([
            'name'=>'required|string|max:100',
            'email'=>'required|email',
            'message'=>'required|string|max:2000',
        ]);
        Contact::create($data);
        return back()->with('success','Gracias por tu mensaje. Lo revisaremos pronto.');
    }

}
