<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Claim;
use DB;

class PostController extends Controller
{ 
    /**
     * Getting list of claimed posts.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getClaimedPosts(Request $request)
    {
        $claims = Claim::where('user_id', $request->id)->get();

        if ($claims) {
            $response = [
                'success'   => true,
                'data'      => [],
            ];
            foreach ($claims as $claim) {
                $response['data'][] = [
                    'id'        => $claim->post_id,
                    'name'      => $claim->post->name,
                    'category'  => $claim->post->category,
                ];
            }
            return response()->json($response, 200);
        } else {
            $response = [
                'success'   => true,
                'data'      => 'Record doesnt exists',
            ];
            return response()->json($response, 403);
        }
    }

    public function claimPosts(Request $request)
    {
        
        $real_answer = DB::table('posts_verification')->where('post_id',$request->post_id)->value('answer');

        if ($real_answer == $request->answer)
        {
            $response = [
                'success'   => true,
                'data'      => 'Claim success',
            ];
            return view('pages/dashboard');
        } else {
            $response = [
                'success'   => false,
                'data'      => 'Claim failed',
            ];
            return response()->json($response, 403);
        }
    } 
}
