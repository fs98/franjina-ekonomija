<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_slug');
            $table->string('keywords');
            $table->string('cover');
            $table->string('cover_image_description')->nullable();
            $table->text('content');
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->integer('likes')->default(0);
            $table->integer('investors')->default(0);
            $table->string('money_goal')->nullable();
            $table->string('money_collected')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
