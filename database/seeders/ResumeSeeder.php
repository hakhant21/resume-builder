<?php

namespace Database\Seeders;

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
        $resume = Resume::create([
            'name' => 'Htet Aung Khant',
            'email' => 'hakhant21@gmail.com',
            'position' => 'Senior Web Developer',
            'phone' => '095095905',
            'address' => 'No.1/133,Ken Oo Ward,Rose Street,Pyinmana,Nay Pyi Taw',
            'github' => 'https://github.com/hakhant21',
            'website' => null,
            'aboutme' => '<p>As a Senior Backend Developer with over [4 years] of experience, I specialize in designing robust, scalable, and high-performance backend systems. My expertise lies in languages like PHP and Node.js, as well as frameworks like Laravel and Express.js. I thrive on solving complex problems, optimizing database interactions, and ensuring seamless API integrations. My proficiency in databases—both SQL (PostgreSQL, MySQL) and NoSQL (MongoDB, Redis)—ensures efficient data handling and storage solutions.
                          I have extensive experience in implementing real-time IoT device communication using MQTT (Message Queuing Telemetry Transport), enabling low-latency and reliable messaging between devices. This expertise allows me to build systems that cater to modern IoT needs, ensuring secure and efficient device-to-server and device-to-device communication.Beyond coding, I’m passionate about mentoring junior developers, conducting code reviews, and implementing best practices to maintain clean and efficient codebases. With a focus on security, performance, and reliability, I aim to build systems that empower businesses and delight users.
                          In my free time, I enjoy exploring emerging technologies, contributing to open-source projects, and staying updated on industry trends. I’m committed to lifelong learning and leveraging technology to solve real-world challenges.</p>',
            'image' => 'images/profile.jpg',
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
                'title' => 'Sunflower IT Solutions',
                'description' => '',
                'start_date' => '2020-09-01 00:00:00',
                'end_date' => '2021-03-10 00:00:00',
                'is_current' => false,
            ],
            [
                'title' => 'Linn IT Solutions',
                'description' => '',
                'start_date' => '2021-05-11 00:00:00',
                'end_date' => '2022-02-28 00:00:00',
                'is_current' => false,
            ],
            [
                'title' => 'Secure Link',
                'description' => '',
                'start_date' => '2022-09-01 00:00:00',
                'end_date' => '2023-10-31 00:00:00',
                'is_current' => false,
            ],
            [
                'title' => 'Solution Hubs',
                'description' => '',
                'start_date' => '2023-11-07 00:00:00',
                'end_date' => '2024-05-25 00:00:00',
                'is_current' => false,
            ],
            [
                'title' => 'Digital Engineering Tech',
                'description' => '',
                'start_date' => '2024-07-11 00:00:00',
                'end_date' => null,
                'is_current' => true,
            ],
          ]);
    }
}
