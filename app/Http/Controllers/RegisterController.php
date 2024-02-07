<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubmitForm;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Handle the registration form submission.
     */
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email|unique:submitform',
            'password' => 'required|min:6',
            'checkbox' => 'required',
        ]);

        // Create a new user
        $user = new SubmitForm();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        // Add any additional fields you may have in your user model

        $user->save();

        // Flash a success message to the session
        session()->flash('success', 'Registration successful!');

        // Redirect to a success page or any other desired route
        return redirect()->route('home');
    }
}
