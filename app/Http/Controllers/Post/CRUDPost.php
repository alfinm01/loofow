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
            'id' => $request->id,
            'user_id' => $request->user_id,
            'name' => $request->name,
            'type' => $request->type,
            'category' => $request->category,
            'province' => $request->province,
            'city' => $request->city,
            'district' => $request->district,
            'date' => $request->date,
            'month' => $request->month,
            'year' => $request->year,
            'description' => $request->description,
            'color' => $request->color,
            'model' => $request->model,
            'contract_type' => $request->contract_type,
            'contract' => $request->contract,
            'solved_at' => $request->solved_at
        ]);

        //redirect ke halaman dimana pengguna dapat melihat postnya
        return redirect('/dashboard');
    }

    //function yang dijalankan ketika button edit ditekan
    public function editRespons($id) {
        //ambil data dari id yang udah dipilih
	    $post = DB::table('post')->where('id',$id)->get();
        
        //passing data ke front-end 
	    return view('update',['post' => $post]);
    }

    //function ini akan dijalankan ketika akan dilakukan pembaruan data
    public function update (request $request) {
        DB::table('post')->where('id', $request->id)->update([
            'name' => $request->name,
            'type' => $request->type,
            'category' => $request->category,
            'province' => $request->province,
            'city' => $request->city,
            'district' => $request->district,
            'date' => $request->date,
            'month' => $request->month,
            'year' => $request->year,
            'description' => $request->description,
            'color' => $request->color,
            'model' => $request->model,
            'contract_type' => $request->contract_type,
            'contract' => $request->contract,
            'solved_at' => $request->solved_at
        ]);
    }

    public function delete($id) {
        //Delete atribut dengan melihat id
        DB::table('post')->where('id', $id)->delete();

        //mengembalikan view
        return redirect('/dashboard');
    }

    //Update belum masuk
}