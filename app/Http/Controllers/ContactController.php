<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ClientMail;
use App\Mail\ProviderMail;
use App\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
        return view('backend.contacts.index', compact('contacts'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'      => 'required|string|min:1|max:255',
            'email'     => 'required|email|string|max:255',
            'phone'     => 'required|min:5|max:255',
            'message'   => 'required|min:5|max:255'
        ]);

        $to_email   = $data['email'];

        Contact::create($data);


        try {
            Mail::to($to_email)->send(new ClientMail($data));
        } catch (\Throwable $th) {
            return back()->withError('Ha ocurrido un error al enviar procesar tu registro, por favor intentalo de nuevo')->withInput($request->input());
        }

        try {
            Mail::to('jonnathan.c.765@gmail.com')->send(new ProviderMail($data));
        } catch (\Throwable $th) {
            return back()->withError('Ha ocurrido un error al enviar procesar tu registro, por favor intentalo de nuevo')->withInput($request->input());
        }


        return back()->withSuccess('Tu solicitud ha sido procesada exitosamente, te atenderemos lo mas pronto posible');
    }
}
