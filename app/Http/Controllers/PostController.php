<?php

// nah penggunaan dari PostController itu adalah untuk memproses, mengedit, mengupdate, mendelete yang ada didalamnya
// penaaman post controller ini juga harus sesusai dengan yang ada dimodel, jika di model nama  nya post maka ditambahkana PostController, jika namanyua User naka namanya adalah UserController

// nah didalam models itu berisikan data data
namespace App\Http\Controllers;
use App\Models\Post;


use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('blog',[
            "tittle" => "Halaman Blog",
            "posts" => Post::all() // ada fungsi dari Post ini adalah kita memanggil file dengan nama Post yang berisikan metode all() yang berada didalam Post
        ]);
    }

    public function index2($slug){
        return view ('post',[
            "tittle" => "satu elemen",
            "posts" => Post::find($slug)
        ]);
    }
}
