<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class Verifikasi extends Controller {

//function untuk membuka pertanyaan verifikasi dari post
    public function postVerifikasi($id) {
       
        $verification = DB::table('posts_verification')->where('post_id', $id)->get();

        //mengembalikan view
        return view('/pages/verification', ['verification' => $verification]);
    }
}