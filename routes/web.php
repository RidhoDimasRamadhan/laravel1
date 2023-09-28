<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use PhpParser\Node\Stmt\Echo_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// jadi fungsi eelcome ini adalah sebuah file yang bernaamakan welcom yang terdapar pada resources/welcome/nama file, ketika menamakan file speeri welcoma, pasti akan menamhkan kata .blade di depan file yang akan dibuat didepan function welcome

Route::get('/', function(){
    return view('new1',[
        "nama" => "Ridho Dimas Ramadhan",
        "kelas" => "3KA24",
    ]);
});

// sudah menggunakan controller jadi langung b=di akses, diubah,ditambah, diprose didalam file postcontroller
Route::get('/blog',[PostController::class, "index"]);

// halaman satu element
Route::get('posts/{slug}', [PostController::class, 'index2']);

Route::get('/identitas',function(){
    return view('identitas', [
        "tittle" => "Halaman Identitas"
    ]);
});

Route::get('/newWallpaper',function(){
    return view('newWallpaper',[
        "tittle" => "Halaman Home"
    ]);
});
// Route::get('/', function () {
//     return view('welcome');
// });

//   :: fungsi dari titik dua ini adalah untuk memberi tahu bahaw ini termasuk adalah kelas dari route yng dinmnana route 
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/nama/lengkap', function (){
    echo "<h1>Ridho Dimas Ramadhan</h1>";
    echo "<p>Dari kelas 3KA24</p>";
});


