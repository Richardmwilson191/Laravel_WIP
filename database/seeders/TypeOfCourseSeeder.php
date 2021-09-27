<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeOfCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $types = [
        [
            'course_type' => 'Science',
            'desc' => 'Category description 1'
        ],
        [
            'course_type' => 'Liberal Art',
            'desc' => 'Category description 2'
        ],
        [
            'course_type' => 'Science',
            'desc' => 'Category description 3'
        ],

    ];

    public function run()
    {
        foreach ($this->types as $type) {
            TypeOfCourse::create($type);
        }
    }
}
