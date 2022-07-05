<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreatePosts extends Controller
{
    public function __invoke(Request $request) {
        $title = $request->input('title');
        $detail = $request->input('detail');
        $user = $request->input('user');


        ///DBに保存する処理


        return response()->json([
            "posts" => [
                "title" => $title,
                "detail" => $detail,
                "user" => $user
            ],
        ]);
    }
}
