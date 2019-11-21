<?php

namespace App\Http\Controllers\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CRUDPost extends Controllers {
    public function create(Request $request) {
        //ambil data dari frontend
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
            'contact_type' => $request->contact_type,
            'contact' => $request->contact,
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
    public function updatePost (Request $request) {
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
            'contact_type' => $request->contact_type,
<<<<<<< HEAD
            'contact' => $request->contact,
            'status' => $request->status
=======
            'contact' => $request->contact
>>>>>>> luth_crud
        ]);

        //mengembalikan ke tampilan dashboard
        return redirect('/dashboard');
    }

    public function deletePost($id) {
        //Delete atribut dengan melihat id
        DB::table('post')->where('id', $id)->delete();

        //mengembalikan view
        return redirect('/dashboard');
    }
}