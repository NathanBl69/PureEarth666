<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationVideoSeeder extends Seeder
{
    public function run()
    {
        DB::table('education_videos')->insert([
            [
                'title' => 'Sand and Soil Pollution Experiment',
                'image' => 'education-1.jpg',
                'image_author' => 'author-1.jpg',
                'description' => 'The video titled "Sand and Soil Pollution Experiment", by the Coastal Watershed Council...',
                'publish_date' => '2020-08-19',
                'author' => 'Coastal Watershed Council',
                'author_description' => 'Coastal Watershed Council (coastal-watershed.org) is an environmental nonprofit...',
                'tags' => json_encode(['Video', 'Education', 'Experiment', 'Sand', 'Soil', 'Pollution']),
                'video_link' => 'https://youtu.be/R6-sTn70MXk?si=NQRvyVyXVgzIEB2m',
            ],
            [
                'title' => 'What is POLLUTION?',
                'image' => 'education-2.jpg',
                'image_author' => 'author-2.jpg',
                'description' => 'In the Dr. Binocs Show video titled "What is POLLUTION? | Types of POLLUTION", Dr. Binocs explains...',
                'publish_date' => '2020-03-24',
                'author' => 'Dr Bincos (Peekaboo Kidz)',
                'author_description' => 'Peekaboo is a cheerful destination...',
                'tags' => json_encode(['Video', 'Education', 'Sand', 'Soil', 'Pollution', 'Earth']),
                'video_link' => 'https://youtu.be/7qkaz8ChelI?si=ehyWmIIWARU_uZzA',
            ],
            [
                'title' => 'How We Can Keep Plastics Out of Our Ocean',
                'image' => 'education-3.jpg',
                'image_author' => 'author-3.jpg',
                'description' => 'The National Geographic video "How We Can Keep Plastics Out of Our Ocean" discusses...',
                'publish_date' => '2016-09-17',
                'author' => 'National Geographic',
                'author_description' => 'National Geographic is the world\'s premium destination...',
                'tags' => json_encode(['Video', 'Education', 'Plastic', 'Water', 'Pollution', 'Ocean']),
                'video_link' => 'https://youtu.be/HQTUWK7CM-Y?si=VsrMXBsIFapMP2S7',
            ],
            [
                'title' => 'How to Control Soil Pollution?',
                'image' => 'education-3.jpg',
                'image_author' => 'author-3.jpg',
                'description' => 'PeekabooKidz Pollution Control',
                'publish_date' => '2023-12-02',
                'author' => 'PeekabooKidz',
                'author_description' => 'Peekaboo is a cheerful destination...',
                'tags' => json_encode(['Video', 'Education', 'Sand', 'Soil', 'Pollution', 'Earth']),
                'video_link' => 'https://www.youtube.com/watch?v=6_pxAAPkaZ8&t=1s',
            ],
        ]);
    }
}
