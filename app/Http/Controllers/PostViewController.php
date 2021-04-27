<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostWrite;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostViewController extends Controller
{
    public function postview () {
        $data = DB::select('select * from post_writes');
        $pages = PostWrite::paginate(4);
        return view('main', ['data' => $data], ['posts'=>$pages]);
    }
}

