<?php
// post php ini ada karena untuk membuat control model yang beranama control model
// pembuatan post ini adlah akan berisikan data yang berisikan database, jadi post ini akan diproses atau dilempar ke dalam controller yang sudah terhubung dengan post ini 
namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

// di dalam model ini akan berisikian fungsi yang akan dipanggil didalam routes
class Post {
    // untuk maksudnya dari pricate static ini adalah ingin mempuat class yang berisiskan static lalu hanya bisa dibuka dengan private (dengan blog_posts)
    private static $blog_posts = [
        [
            "title" => "Judul Buku 1",
            "slug" => "judul-buku-1",
            "author" => "Ridho Dimas Ramadhan",
            "isi" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto veniam accusamus modi facilis veritatis qui tempore? Ullam obcaecati ipsa nisi eligendi minus, ex ut dolorem exercitationem consequuntur quos natus. Vitae dolorem sequi officiis. Exercitationem illum culpa enim expedita, beatae quis tempore incidunt voluptates facilis ullam officiis voluptate sunt dolores in vel, alias quia voluptatibus autem excepturi, ut provident? Perferendis hic totam eos sequi incidunt beatae dolorum, error molestiae labore unde veritatis, quos illum quidem sunt laudantium quam doloremque aliquid similique dolore sed amet laboriosam? Impedit obcaecati perferendis labore sunt a."
        ],
        [
            "title" => "Judul Buku 2",
            "slug" => "judul-buku-2",
            "author" => "Dimas Ramadhbn",
            "isi" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis iusto hic atque nobis doloribus in magnam dolorem, quidem provident quod tenetur dicta necessitatibus velit consequuntur voluptatum natus iure porro officia eius ut perferendis commodi voluptatibus. Aperiam ullam eos quaerat, at aliquam esse. Officia eius alias vitae adipisci at magnam dignissimos neque cumque voluptas, maiores unde vel sequi voluptates asperiores quis id iure tenetur quasi, delectus modi quia, ut harum! Sapiente cum modi dolore, tempore, autem sequi porro iusto accusamus exercitationem nostrum quod cupiditate maiores quaerat explicabo. Tempore magnam quas laborum quos, repellat neque reiciendis officiis error, qui pariatur repellendus possimus."
        ],
    ];

    public static function all(){
        // penggunaan self dibawah ini adalah untuk properti static (yang seperti diatas 'private static')
        return collect( self::$blog_posts);
    }

    public static function find($slug){
        $posts =static::all();
        
        //     $buku = [];
        // foreach ($posts as $kumpulan ) {
            //     if($kumpulan['slug']===$slug){
                //         $buku = $kumpulan;
                //     }
                // }
                return $posts -> firstWhere('slug', $slug);
        }
    }
