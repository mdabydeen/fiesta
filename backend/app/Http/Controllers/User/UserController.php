<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {

        $user = Cache::remember('users', 5*60, function() {
            return User::all();
        });

        return response()->json($user);
    }
}
