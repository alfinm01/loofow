<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ListPost extends Controllers {
    public function listAllItems() {
        //ambil data
        $post = DB::table('post')->get();

        //pass to view -- Asumsi readpost dilakuin di bagian home
        return view('home', ['post' => $post]);
    }

    public function listByKeywords(Request $request) {
        //ambil data dengan keyword tertentu
        $post = DB::table('post')->where('name', $request->keyword)->get();

        //Menampilkan hasil data dengan keywords tertentu
        return view('detail',['post' => $post]);
    }

    public function listByUser(Request $request) {
        //ambil data berdasarkan user_id
        $post = DB::table('post')->where('user_id', $request->user_id)->get();

        //Menampilkan hasil data dengan keywords tertentu
        return view('dashboard',['post' => $post]);
    }
}