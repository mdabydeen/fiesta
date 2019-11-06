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
        // if ($this->validate($request)) {

        // }
        $redis = Redis::lpush("1", json_encode($request->all()));

        $values = Redis::lrange('1', 0, -1);

        return response()->json($values);
    }
}
