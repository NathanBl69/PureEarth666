<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationVideosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('education_videos', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('title'); // Video title
            $table->string('image'); // Image file name
            $table->string('image_author'); // Author of the image
            $table->text('description'); // Detailed description
            $table->date('publish_date'); // Publish date
            $table->string('author'); // Author of the content
            $table->text('author_description'); // Description of the author
            $table->json('tags'); // Tags stored as JSON
            $table->string('video_link'); // URL of the video
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('education_videos');
    }
};
