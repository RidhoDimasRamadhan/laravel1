<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //  unutk up ini digunakaan untuk membuuat struktur table di db, jadi kita tidak usah untuk membuat struktur di db dengan panjang berapa, id nya apa.. cukup dengan membuat struktur nya di up maka bisa langsung untuk membuat dbnya
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

     // fungsi ini kebalikan dari up yang dimana fungsi dari down ini adalah untuk menghapus table, jika di laravel bisa dengan menggunakan peritnah rollback
    public function down()
    {
        Schema::dropIfExists('users');
    }

    // jadi dengan mrnggunsksn php artisan migrate:fresh akan menjalankan rollback terlebih dahulu baru migration, jadi php artidan migrate:fresh ini semacam shortcut yang isinya adlah gabungan dari rollback dan migration 
};
