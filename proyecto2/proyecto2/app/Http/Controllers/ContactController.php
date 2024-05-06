<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:contacts,email'
        ]);

        Contact::create([
            'email' => $request->email
        ]);

        return redirect()->back()->with('success', 'Correo electrónico guardado con éxito.');
    }
}
