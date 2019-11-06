<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function createPost(Request $request)
    {
        // Add user post to Cache
        $redis = Redis::lpush($request->user(), json_encode($request->all()));

        // Get all user followers.

        // Fan out user post to all followers.


        return response()->json(['status' => 'created'], 200);
    }
}
