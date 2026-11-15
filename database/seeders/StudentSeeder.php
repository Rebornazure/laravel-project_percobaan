<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classroom = Classroom::query()->firstOrFail();

        Student::factory(10)->for($classroom)->create();
    }
}
