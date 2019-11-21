<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReadPost extends Controllers {
    public function read() {
        //ambil data
        $post = DB::table('post')->get();

        //pass to view -- Asumsi readpost dilakuin di bagian home
        return view('home', ['post' => $post]);
    }

    public function create(Request $request) {
        //atribut dari post belum masuk
        DB::table('post')->insert([
            'post_user' => $request->user
        ]);

        //redirect ke halaman dimana pengguna dapat melihat postnya
        return redirect('/dashboard')
    }

    public function delete($id) {
        //Delete atribut dengan melihat id
        DB::table('post')->where('post_id', $id)->delete();

        //mengembalikan view
        return redirect('/dashboard')
    }

    //Update belum masuk
}