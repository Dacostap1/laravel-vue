<?php

use App\Modul;
use App\Student;
use Illuminate\Database\Seeder;

class ModulsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<30; $i++){
            $students = Student::has('moduls', '<' , Modul::TotalMaximo)->get();
            factory(Modul::class)->create([
                'student_id' => $students->random()->id,
            ]);
        }
    }
}
