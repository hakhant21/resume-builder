<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Resume;
use App\Models\Section;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrFail();

        $resume = Resume::create([
            'user_id' => $user->id,
            'name' => 'Htet Aung Khant',
            'email' => 'hakhant21@gmail.com',
            'position' => 'Senior Web Developer',
            'phone' => '095095905',
            'address' => 'No.1/133,Ken Oo Ward,Rose Street,Pyinmana,Nay Pyi Taw',
            'github' => 'https://github.com/hakhant21',
            'website' => null,
            'aboutme' => "<p>As a Senior Backend Developer with 4+ years of experience, I specialize in building robust, scalable systems using PHP, Node.js, Laravel, and Express.js. My expertise spans SQL (PostgreSQL, MySQL), NoSQL (MongoDB, Redis), and real-time IoT communication via MQTT. I excel in solving complex problems, optimizing database interactions, and ensuring secure, high-performance API integrations. Passionate about mentoring, I promote clean code and best practices while delivering systems focused on security, performance, and user satisfaction. In my spare time, I explore emerging technologies and contribute to open-source projects.</p>",
            'image' => 'images/cv.jpg',
        ]);

        $items = [
            [
                'resume_id' => $resume->id,
                'name' => 'Experiences',
                'type' => 'experiences',
            ],
            [
                'resume_id' => $resume->id,
                'name' => 'Educations',
                'type' => 'educations',
            ],
            [
                'resume_id' => $resume->id,
                'name' => 'Skills',
                'type' => 'skills',
            ],
            [
                'resume_id' => $resume->id,
                'name' => 'Languages',
                'type' => 'languages',
            ],
            [
                'resume_id' => $resume->id,
                'name' => 'Certificates',
                'type' => 'certificates',
            ],
            [
                'resume_id' => $resume->id,
                'name' => 'Interests',
                'type' => 'interests',
            ],
        ];

        foreach ($items as $item) {
          Section::create($item);
        }

        $findSection = Section::where('id', 1)->first();

        $findSection->sectionItems()->createMany([
            [
                'title' => 'Junior Web Developer',
                'company' => 'Sunflower IT Solutions',
                'description' => '',
                'start_date' => '2020-09-01 00:00:00',
                'end_date' => '2021-03-10 00:00:00',
                'is_current' => false,
            ],
            [
                'title' => 'Junior Web Developer',
                'company' => 'Linn IT Solutions',
                'description' => '',
                'start_date' => '2021-05-11 00:00:00',
                'end_date' => '2022-02-28 00:00:00',
                'is_current' => false,
            ],
            [
                'title' => 'Senior Web Developer',
                'company' => 'Secure Link',
                'description' => '',
                'start_date' => '2022-09-01 00:00:00',
                'end_date' => '2023-10-31 00:00:00',
                'is_current' => false,
            ],
            [
                'title' => 'Senior Web Developer',
                'company' => 'Solution Hubs',
                'description' => '',
                'start_date' => '2023-11-07 00:00:00',
                'end_date' => '2024-05-25 00:00:00',
                'is_current' => false,
            ],
            [
                'title' => 'Senior Backend Developer',
                'company' => 'Digital Engineering Tech',
                'description' => '',
                'start_date' => '2024-07-11 00:00:00',
                'end_date' => null,
                'is_current' => true,
            ],
          ]);
    }
}
