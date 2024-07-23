<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Validator;
use Illuminate\Support\facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('welcome');
        }

        return back()->withErrors([
            'email' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.',
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'username'=>['required', 'String', 'max:155', 'unique:users'],
            'name'=>['required', 'String', 'max:155'],
            'email'=>['required', 'String', 'email', 'max:255', 'unique:users'],
            'password'=>['required', 'String', 'min:8', 'confirmed'],
            'sex'=>['required', 'String', 'in:male, female'],

        ]);

        if ($validator->fails()) {
            # code...
            return redirect()->back()->withErrors($validator)->withInput();
        };

        $user = user::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'sex' => $request->sex,
        ]);

        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
