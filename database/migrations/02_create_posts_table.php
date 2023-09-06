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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 300);
            $table->string('view_id', 10);
            $table->string('link_tag', 300);
            $table->string('description', 300);
            $table->smallInteger('card_id');
            $table->text('titles')->nullable();
            $table->string('tags', 500)->nullable();
            $table->smallInteger('user_id');
            $table->smallInteger('state'); // 1 = active, 0 = inactive
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
        Schema::dropIfExists('posts');
    }
};
