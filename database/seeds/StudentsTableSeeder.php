<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Generator as Faker;


class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // for ($i=0; $i < 10; $i++) {
        //     $new_student = new Student();
        //     $new_student->name= $faker->sentence(3);
        //     $new_student->lastname= $faker->sentence(3);
        //     $new_student->number= $faker->randomFloat(0, 10, 1000);
        //     $new_student->email= $faker->sentence(3);
        //     $new_student->save();
        // }
    }
}
