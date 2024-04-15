<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
    public function submit(ContactRequest $req)
    {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();
        return redirect()->route('home')->with('success', 'Сообщение было добавлено');
    }

    public function allData() {
        $messages = Contact::all();
        return response()->json($messages);
    }

    public function show($id) {
        $message = Contact::find($id);
        return view('data-one', compact('message'));
    }
    public function delete($id) {
        $message = Contact::find($id);
        $message->delete();
        return redirect()->route('data')->with('success', 'Сообщение было удалено');
    }
}
