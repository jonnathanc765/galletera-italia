<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ClientMail;
use App\Mail\ProviderMail;
use App\Contact;
use App\Failed;
use App\Traits\Emails;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    use Emails;
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
    public function envioMasivo(Request $request)
    {
        $emails = $this->getEmails();

        foreach ($emails as $email) {

            $data = [];

            $data['city'] = $email[0];
            $data['company'] = $email[1];
            $data['name'] = $email[2];
            $data['phone'] = $email[3];
            $data['email'] = $email[4];


            // Correo para el cliente

            $to_email   = $data['email'];

            try {

                Mail::to($to_email)->send(new ClientMail($data));

                $failed = Failed::whereEmail($to_email)->first();

                if ($failed) {
                    $failed->delete();
                }

            } catch (\Throwable $th) {
                Failed::create($data);
            }


            $contact = Contact::whereEmail($data['email'])->first();

            if (!$contact) {
                Contact::create($data);
            }
            // Finalmente, si no surje ningun error, se guarda todo en la base de datos
            break;
        }
        return redirect()->route('contact.success');
    }
}
