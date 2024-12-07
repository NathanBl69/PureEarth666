<?php

use App\Models\EducationVideo;

public function show($education)
{
    $video = EducationVideo::findOrFail($education);

    return view('education.details', compact('video'));
}