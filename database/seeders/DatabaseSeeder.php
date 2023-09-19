<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Job::factory(10)->create();

        // \App\Models\Job::factory()->create([
        DB::table('jobs')->insert([    
            'job_title' => 'Product Manager',
            'job_region' => 'Dhaka/ Bangladesh',
            'company' => 'ABC',
            'job_type' => 'Full Time',
            'job_vacancy' => '2',
            'experience' => '2-3 years',
            'salary' => '600$-700$',
            'gender' => 'Any',
            'application_published_on' => '2023-08-25 14:02:32',
            'application_deadline' => '2023-08-25 14:02:32',
            'job_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'responsibilities' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'education_experience' => 'BBA',
            'other_benifits' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'photo' => 'job_logo_4.jpg',
        ]);
    }
}
