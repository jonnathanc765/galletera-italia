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
        $contacts = Contact::orderBy('created_at', 'ASC')->get();
        return view('backend.contacts.index', compact('contacts'));
    }
    public function store(Request $request)
    {
        // Se validan los datos que envia el cliente

        $data = $request->validate([
            'name'      => 'required|string|min:1|max:255',
            'company'      => 'required|min:5|max:255',
            'city'      => 'required|min:1|max:255',
            'email'     => 'required|email|string|max:255',
            'phone'     => 'required|min:5|max:255'
        ]);

        // Correo para el cliente

        $to_email   = $data['email'];

        // try {
            Mail::to($to_email)->send(new ClientMail($data));
        // } catch (\Throwable $th) {
        //     return back()->withError('Ha ocurrido un error al enviar procesar tu registro, por favor intentalo de nuevo')->withInput($request->input());
        // }

        // try {
            Mail::to('agentes.autorizados@inter.com.ve')->send(new ProviderMail($data));
        // } catch (\Throwable $th) {
        //     return back()->withError('Ha ocurrido un error al enviar procesar tu registro, por favor intentalo de nuevo')->withInput($request->input());
        // }

        $contact = Contact::whereEmail($data['email'])->first();

        if ($contact) {
            return redirect()->route('contact.failure');
        }

        // Finalmente, si no surje ningun error, se guarda todo en la base de datos
        Contact::create($data);

        return redirect()->route('contact.success');
    }
}
