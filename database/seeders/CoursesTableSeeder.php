<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CoursesTableSeeder extends Seeder
{
    public function run(): void
    {
        Course::create([
            'subject' => 'DSA 301',
            'section' => 'Section 1',
            'time' => '8 AM to 9 AM',
            'days' => 'Monday,Wednesday',
        ]);

        Course::create([
            'subject' => 'DSA 301',
            'section' => 'Section 2',
            'time' => '9 AM to 10 AM',
            'days' => 'Tuesday,Thursday',
        ]);

        Course::create([
            'subject' => 'COMPROG 302',
            'section' => 'Section 1',
            'time' => '10 AM to 11 AM',
            'days' => 'Tuesday,Wednesday',
        ]);

        Course::create([
            'subject' => 'COMPROG 302',
            'section' => 'Section 2',
            'time' => '11 AM to 12 PM',
            'days' => 'Tuesday,Friday',
        ]);

        Course::create([
            'subject' => 'SysArch 304',
            'section' => 'Section 1',
            'time' => '1 PM to 2 PM',
            'days' => 'Monday,Wednesday',
        ]);

        Course::create([
            'subject' => 'SysArch 304',
            'section' => 'Section 2',
            'time' => '2 PM to 3 PM',
            'days' => 'Monday,Saturday',
        ]);

        Course::create([
            'subject' => 'DBMS 303',
            'section' => 'Section 1',
            'time' => '3 PM to 4 PM',
            'days' => 'Tuesday,Thursday',
        ]);

        Course::create([
            'subject' => 'DBMS 303',
            'section' => 'Section 2',
            'time' => '4 PM to 5 PM',
            'days' => 'Monday,Thursday',
        ]);

        Course::create([
            'subject' => 'WebDev 305',
            'section' => 'Section 1',
            'time' => '5 PM to 6 PM',
            'days' => 'Tuesday,Friday',
        ]);

        Course::create([
            'subject' => 'WebDev 305',
            'section' => 'Section 2',
            'time' => '6 PM to 7 PM',
            'days' => 'Wednesday,Saturday',
        ]);

        Course::create([
            'subject' => 'OS 306',
            'section' => 'Section 1',
            'time' => '7 AM to 10 AM',
            'days' => 'Saturday',
        ]);

        Course::create([
            'subject' => 'OS 306',
            'section' => 'Section 2',
            'time' => '7 AM to 10 AM',
            'days' => 'Saturday',
        ]);

        Course::create([
            'subject' => 'AI|ML 307',
            'section' => 'Section 1',
            'time' => '8 AM to 9 AM',
            'days' => 'Tuesday,Friday',
        ]);

        Course::create([
            'subject' => 'AI|ML 307',
            'section' => 'Section 2',
            'time' => '7 AM to 10 AM',
            'days' => 'Wednesday',
        ]);
    }
}
