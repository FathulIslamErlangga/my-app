<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            "title" => 'Register GMF',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'no_karyawan' => 'required',
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        $validatedData['password'] = Hash::make($validatedData["password"]);
        User::create($validatedData);
        return redirect('/dashboard-admin/login');
    }
}
