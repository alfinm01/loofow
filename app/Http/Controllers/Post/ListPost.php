<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class ListPost extends Controller {
    public function listAllItems() {
        //ambil data
        $postHLost = DB::table('posts')->where('type', '=' , 'Lost')->where('status', '=' , '0')->orderBy('year', 'desc')->orderBy('month', 'desc')->orderBy('date', 'desc')->get();

        $postHFound = DB::table('posts')->where('type', '=' , 'Found')->where('status', '=' , '0')->orderBy('year', 'desc')->orderBy('month', 'desc')->orderBy('date', 'desc')->get();

        //pass to view -- Asumsi readpost dilakuin di bagian home
        return view('pages/home', ['postHLost' => $postHLost, 'postHFound' => $postHFound]);
    }

    public function listByKeywords(Request $request) {
        //ambil data dengan keyword tertentu
        $post = DB::table('posts')->where('name', 'like', '%' . $request->keyword . '%')->where('status', '=' , '0')->orderBy('year', 'desc')->orderBy('month', 'desc')->orderBy('date', 'desc')->get();

        //Menampilkan hasil data dengan keywords tertentu
        return view('pages/search',['posts' => $post, 'keyword' => $request->keyword]);
    }

    public function listByUser() {
        //ambil data berdasarkan user_id
        $postFound = DB::table('posts')->where('status', '=' , '0')->where('user_id', Auth::id())->where('type', '=', 'Found')->orderBy('year', 'desc')->orderBy('month', 'desc')->orderBy('date', 'desc')->get();
        
        $postLost = DB::table('posts')->where('status', '=' , '0')->where('user_id', Auth::id())->where('type', '=', 'Lost')->orderBy('year', 'desc')->orderBy('month', 'desc')->orderBy('date', 'desc')->get();
        
        $claims = DB::table('claims')->where('user_id', Auth::id())->get();
        
        $postClaim = [];

        foreach ($claims as $key => $item) {
            $postClaim[$key] = DB::table('posts')->where('id', $item->post_id)->orderBy('year', 'asc')->orderBy('month', 'asc')->orderBy('date', 'asc')->first();
        }

        //Menampilkan hasil data dengan keywords tertentu
        return view('pages/dashboard',['postFound' => $postFound, 'postLost' => $postLost, 'postClaim' => $postClaim]);
    }
}