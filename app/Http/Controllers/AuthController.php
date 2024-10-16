<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showRegistration(){
        return view('registration');
    }

    function submitRegistration(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        // dd($user);
        return redirect()->route('login');
    }

        function showLogin(){
            return view('login');
        }

        function submitLogin(Request $request){
            $data = $request->only('email', 'password');

            if(Auth::attempt($data)){
                $request->session()->regenerate();
                return redirect()->route('dashboard.show');
            } else{
                return redirect()->back()->with('Failed', 'Email or password is incorrect');
            }
        }

        function logout() {
            Auth::logout();
            return redirect()->route('login.show');
        }
}
