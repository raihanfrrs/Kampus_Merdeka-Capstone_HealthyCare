<?php

use App\Models\CategoryDisease;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diseases', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CategoryDisease::class);
            $table->string('disease')->unique();
            $table->string('doctor');
            $table->string('urlToImage');
            $table->string('symptom1')->nullable();
            $table->string('symptom2')->nullable();
            $table->string('symptom3')->nullable();
            $table->string('symptom4')->nullable();
            $table->string('symptom5')->nullable();
            $table->text('definition');
            $table->text('treatment');
            $table->text('prevention');
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
        Schema::dropIfExists('diseases');
    }
};
