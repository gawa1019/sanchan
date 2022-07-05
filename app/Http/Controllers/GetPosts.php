<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetPosts extends Controller
{
    public function __invoke() {



        response()->()

        return response()->json([
            "posts" => [
                "title" => "あしたの天気のはなし",
                "detail" => "あしたは雨です",
                "user" => "こころ"
            ],
        ]);
    }
}
