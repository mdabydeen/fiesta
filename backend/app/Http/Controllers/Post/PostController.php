<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
use App\UserFollow;
use Carbon\Carbon;

class PostController extends Controller
{
    //
    public function createPost(Request $request)
    {
        $userId = $request->user()->id;

        $values = array(
            'body' => $request->body,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        );

        // Add user post to Cache
        Redis::lpush($userId, json_encode($values));
        Redis::expire($userId, Carbon::now()->addDays(7)->timestamp);

        // Get all user followers.
        $followers = UserFollow::where('user_id', $userId);

        // Fan out user post to all followers.



        return response()->json(['status' => $followers]);
    }
}
