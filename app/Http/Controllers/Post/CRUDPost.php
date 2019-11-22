<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Auth;


class CRUDPost extends Controller {
    public function create(Request $request) {
        //setting image dengan asumsi bahwa gambar required
        // Get image file
        $image = $request->file('image');
        // Make a image name based on user name and current timestamp
        $name = Str::slug($request->input('name')).'_'.time();
        // Define folder path
        $folder = '/uploads/images/';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        // Upload image
        $this->uploadOne($image, $folder, 'public', $name);
        

        //ambil data dari frontend
        DB::table('posts')->insert([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'image' => $filePath,
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

        DB::table('posts_verification')->insert([
            'id' => Auth::id(),
            'question' => $request->question,
            'a' => $request->a,
            'b' => $request->b,
            'c' => $request->c,
            'answer' => $request->answer,
        ]);

        //redirect ke halaman dimana pengguna dapat melihat postnya
        return redirect('dashboard');
    }

    //function yang dijalankan ketika button edit ditekan
    public function editRespons($id) {
        //ambil data dari id yang udah dipilih
	    $post = DB::table('posts')->where('id',$id)->get();
        
        //passing data ke front-end 
	    return view('update',['posts' => $post]);
    }

    //function ini akan dijalankan ketika akan dilakukan pembaruan data
    public function updatePost (Request $request) {
        DB::table('posts')->where('id', $request->id)->update([
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
            'contact' => $request->contact
        ]);

        //mengembalikan ke tampilan dashboard
        return redirect('/dashboard');
    }

    public function deletePost($id) {
        //Delete atribut dengan melihat id
        DB::table('posts')->where('id', $id)->delete();

        //mengembalikan view
        return redirect('/dashboard');
    }

    public function getById($id) {
        //ambil data dari id yang udah dipilih
	    $post = DB::table('posts')->where('id',$id)->get();
        
        //passing data ke front-end 
	    return view('/pages/post', ['post' => $post]);
    }
}