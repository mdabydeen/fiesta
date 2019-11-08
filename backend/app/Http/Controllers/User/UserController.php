<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Http\Controllers\Controller;
use App\User;
use App\UserFollow;

class UserController extends Controller
{
    /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        // Return information about the current user.
        return response()->json($request->user());
    }


    public function getTimeline(Request $request)
    {
        $results = array();
        $timeline = Redis::lrange($request->user()->id, 0 , -1);

       foreach($timeline as $t) {
        array_push($results, \json_decode($t));
       }

        return response()->json($results);
    }

    public function followUser(Request $request)
    {

        UserFollow::create([
            'user_id' => $request->user()->id,
            'follows' =>  $request->id
        ]);

        return response()->json($request->id);
    }
}
