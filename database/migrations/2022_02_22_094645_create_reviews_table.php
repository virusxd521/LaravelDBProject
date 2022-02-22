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
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {

            $table->id();  // `id`, PRIMARY KEY, AUTO_INCREMENT, UNSIGNED BIGINT(20)
            // $table->unsignedBigInteger('movie_id');
            $table->foreignId('movie_id'); // UNSIGNED BIGINT(20)
            $table->text('text');  // TEXT
            $table->timestamps();  // `created_at` TIMESTAMP
                                   // `updated_at` TIMESTAMP

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
