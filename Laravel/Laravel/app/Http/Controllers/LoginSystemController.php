<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Http\Request;

class LoginSystemController extends Controller
{

    public function __construct(){
        $this->middleware(['guest']);
    }


    public function registerIndex(){
        return view('register');
    }

    

    public function storeInformation(Request $request){

        $this->validate($request, [
            'student_number' => 'required|max:255|unique:users',
            'name' => 'required|max:255',
            'course' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'student_number' => $request->student_number,
            'name' => ucwords($request->name),
            'course' => ucwords($request->course),
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return back()->with('sucess', ' ');

    }






    public function loginIndex(){
        return view('login');
    }

    public function login(Request $request){

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(!auth()->attempt($credentials, $request->remember)){
            return back()->with('error', ' ');
        }

        return redirect()->route('home');

    }











}
