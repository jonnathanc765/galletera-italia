<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ClientMail;
use App\Mail\ProviderMail;
use App\Contact;
use Mail;

class ContactController extends Controller
{
    public function index()
    {
        // Se ordenan desde el mas nuevo
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
        return view('backend.contacts.index', compact('contacts'));
    }
    public function store(Request $request)
    {
        // Se validan los datos que envia el cliente

        $data = $request->validate([
            'name'      => 'required|string|min:1|max:255',
            'company'      => 'required|min:5|max:255',
            'email'     => 'required|email|string|unique:contacts,email|max:255',
            'phone'     => 'required|min:5|max:255'
        ]);

        // Correo para el cliente

        $to_email   = $data['email'];

        Mail::to($to_email)->send(new ClientMail($data));

        try {
            Mail::to(env('PROVIDER_EMAIL'))->send(new ProviderMail($data));
        } catch (\Throwable $th) {
            return view('contacts.failure');
        }

        // Finalmente, si no surje ningun error, se guarda todo en la base de datos
        Contact::create($data);

        return view('contacts.success');
    }
}
