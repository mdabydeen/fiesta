<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')]))
        {
            $user = Auth::user();
            $success['token'] = $user->createToken('myApp')-> accessToken;

            return response()->json(['success' => $success], 200);
        } else {
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function logout() {
        // Logout logic should be here.
    }

    public function register() {
        // Register logic should be here.
    }

    public function forgotPassword() {

    }

    public function resetPassword() {

    }
}
