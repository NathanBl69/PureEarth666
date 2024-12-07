<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationVideosTable extends Migration
{
    public function up()
    {
        Schema::create('education_videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('image_author');
            $table->text('description');
            $table->date('publish_date');
            $table->string('author');
            $table->text('author_description');
            $table->json('tags');
            $table->string('video_link');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('education_videos');
    }
}
