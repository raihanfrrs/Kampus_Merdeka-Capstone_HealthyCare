<?php

use App\Models\Admin;
use App\Models\KategoriBerita;
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
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Admin::class);
            $table->foreignIdFor(KategoriBerita::class);
            $table->string('author');
            $table->string('source');
            $table->string('title')->unique();
            $table->text('description');
            $table->string('urlSource')->nullable();
            $table->string('urlToImage')->nullable();
            $table->string('file_path')->nullable();
            $table->text('content');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritas');
    }
};
