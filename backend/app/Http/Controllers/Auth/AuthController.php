<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\User;


class AuthController extends Controller
{


    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => ['required','email','string','max:255'],
            'password' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 400);
        }


        if(Auth::attempt(['email' => request('email'), 'password' => request('password')]))
        {
            $user = Auth::user();
            $success['token'] = $user->createToken('myApp')-> accessToken;

            return response()->json(['success' => $success], 200);
        } else {
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'email' => ['required','email', 'string','max:255','unique:users'],
            'password' => ['required'],
            'c_password' => ['required', 'same:password'],
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 400);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;

        return response()->json(['success'=>$success], 200);
    }

    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }

    public function logout() {
        // Logout logic should be here.
        return Auth::logout();
    }

    public function forgotPassword() {
        // Forgot Password logic
    }

    public function resetPassword() {
        // reset password logic
    }
}
