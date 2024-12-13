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
            'days' => 'Monday,Tuesday',
        ]);

        Course::create(attributes: [
            'subject' => 'COMPROG 302',
            'section' => 'Section 1',
            'time' => '10 AM to 11 AM',
            'days' => 'Monday,Thursday',
        ]);

        Course::create(attributes: [
            'subject' => 'SysArch304',
            'section' => 'Section 1',
            'time' => '12 PM to 2 PM',
            'days' => 'Tuesday,Wednesday',
        ]);

         Course::create(attributes: [
            'subject' => 'DBMS 303',
            'section' => 'Section 1',
            'time' => '3 PM to 5 PM',
            'days' => 'Thursday,Saturday',
        ]);

        Course::create(attributes: [
            'subject' => 'WebDev 305',
            'section' => 'Section 1',
            'time' => '3 PM to 4 PM',
            'days' => 'Wednesday,Saturday',
        ]);

          Course::create(attributes: [
            'subject' => 'OS 306',
            'section' => 'Section 1',
            'time' => '10 AM to 12 PM',
            'days' => 'Tuesday,Saturday',
        ]);

        Course::create(attributes: [
            'subject' => 'AI|ML 307',
            'section' => 'Section 1',
            'time' => '10 AM to 12 PM',
            'days' => 'Wednesday,Thursday',
        ]);

         Course::create(attributes: [
            'subject' => 'HCI 308',
            'section' => 'Section 1',
            'time' => '10 AM to 12 PM',
            'days' => 'Thursday,Friday',
        ]);

    }
}
