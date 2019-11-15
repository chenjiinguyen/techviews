<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->char('hash',10);
            $table->string('title')->nullable();
            $table->string('id_author')->nullable();
            $table->string('id_post')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->boolean('in_group')->nullable();
            $table->boolean('reaction')->nullable();
            $table->boolean('comment')->nullable();
            $table->string('password')->nullable();
            $table->text('text')->nullable();
            $table->bigInteger('views')->default(0);
            $table->bigInteger('unlock')->default(0);
            $table->primary('hash');
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
}
