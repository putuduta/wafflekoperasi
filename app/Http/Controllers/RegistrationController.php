<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegistrationController extends Controller
{
    public function showRegistration()
    {
        $registration = Registration::all();

        return view('pages.registration', compact('registration'));
    }

    public function showCreate()
    {
        return view('pages.create_registration');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'no_id' => 'required|numeric',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone_number' => 'required|numeric',
            'bank_name' => 'required|string',
            'bankaccount_name' => 'required|string',
            'bankaccount_number' => 'required|numeric',
            'transfer_proof' => 'required|image|max:1999|mimes:jpg,png,jpeg',
        ]);

        if ($request->hasFile('transfer_proof')) {
            $extension = $request->file('transfer_proof')->getClientOriginalExtension();
            $file_name = $request->name . '.' . $extension;
            $path = $request->file('transfer_proof')->storeAs('public/img', $file_name);
        } else {
            $file_name = NULL;
        }

        $registration = new Registration;
        $registration->name = $request->input('name');
        $registration->no_id= $request->input('no_id');
        $registration->email = $request->input('email');
        $registration->address = $request->input('address');
        $registration->phone_number = $request->input('phone_number');
        $registration->bank_name = $request->input('bank_name');
        $registration->bankaccount_name = $request->input('bankaccount_name');
        $registration->bankaccount_number = $request->input('bankaccount_number');
        $registration->transfer_proof = $file_name;
        $registration->save();

        return redirect()->route('home');   
    }
}


