<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Faker\Factory as Faker;
class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i <= 20; $i++) {
            Teacher::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'age' => $faker->numberBetween(20, 40),
                'gender' => $faker->randomElement(['male', 'female']),
                'phone_number' => $faker->phoneNumber,
                'address' => $faker->address,
                'subject' => $faker->randomElement(['Math', 'Science', 'English', 'History', 'Chemistry', 'Physics']),
                'description' => $faker->sentence(10),
            ]);
        }
    }
}
