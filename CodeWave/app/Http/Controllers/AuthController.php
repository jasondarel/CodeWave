<?php

namespace App\Http\Controllers;

use App\Models\UserPerk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\App;

class AuthController extends Controller
{
    public function register($locale = 'en')
    {
        App::setLocale($locale);
        return view('registerpage');
    }

    public function submitRegistration(Request $request)
    {
        $messages = [
            'name.required' => 'Nama wajib diisi.',
            'name.max' => 'Nama tidak boleh lebih dari 200 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan, silakan gunakan email lain.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password harus terdiri dari minimal 8 karakter.',
            'agree.required' => 'Anda harus menyetujui Syarat dan Ketentuan.',
        ];
    
        $validatedData = $request->validate([
            'name' => 'required|max:200',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'agree' => 'required', // Wajib dicentang
        ], $messages);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            // 'password' => $validatedData['password']
            'password' => Hash::make($validatedData['password'])
        ]);


        UserPerk::create([
            'user_id' => User::where('email', $validatedData['email'] )->first()->id,
            'rank_id' => 1,
            'points' => 0
        ]);

        return redirect()->route('login')->with('success', 'Registration Successful!');
    }

    public function login($locale = 'en')
    {
        App::setLocale($locale);
        return view('loginpage');
    }

    public function submitLogin(Request $request)
    {
        $messages = [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password harus terdiri dari minimal 8 karakter.',
        ];
    
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ], $messages);

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('index')->with('success', 'Login successful!');
        } else {
            return redirect()->back()->with('fail', 'Email or Password wrong!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
