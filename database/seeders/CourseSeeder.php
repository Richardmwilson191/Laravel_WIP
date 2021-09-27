<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $courses = [
        [
            'course_name' => 'Maths',
            'course_type_id' => 1
        ],
        [
            'course_name' => 'English',
            'course_type_id' => 2
        ],
        [
            'course_name' => 'Physics',
            'course_type_id' => 3
        ],

    ];

    public function run()
    {
        foreach ($this->courses as $course) {
            Course::create($course);
        }
    }
}
