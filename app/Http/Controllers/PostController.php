<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
       
       
          $post = DB::statement("select * from posts");
          dd($post);
        // dd($post);
          // return view('index');
    }
}
