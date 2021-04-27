<?php

namespace App\Http\Controllers;

use App\Models\PostWrite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostWriteController extends Controller
{
    public function submit(PostRequest $req) {
        $postwrite = new PostWrite();
        $postwrite -> posttitle = $req->input('postTitle');
        $postwrite -> posttext = $req->input('postText');
        // $postwrite -> $req->file('image')->store('uploads', 'public');
        $postwrite -> save();
       
            // return redirect()-> route("main");
    }
    // public function show() {
    //     $data = DB::select('select * from post_writes');
  
    //     return view('main', ['data' => $data]);
    // }
    // public function pagination() {
    //     $page = PostWrite::paginate(1);
    //     return view('main', ['page'=>$page]);
    // }
}
