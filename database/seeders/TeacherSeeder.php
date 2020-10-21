<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::create([
            'salutation' => "Dr", "last_name" => "Booker", "first_name" => "John"
        ]);
        Teacher::create([
            'salutation' => "Dr", "last_name" => "Booker", "first_name" => "James"
        ]);
        Teacher::create([
            'salutation' => "Dr", "last_name" => "Brooke", "first_name" => "Kelly"
        ]);
        Teacher::create([
            'salutation' => "Dr", "last_name" => "James", "first_name" => "Francis"
        ]);
        Teacher::create([
            'salutation' => "Dr", "last_name" => "Kneller", "first_name" => "Kevin"
        ]);
        Teacher::create([
            'salutation' => "Dr", "last_name" => "Oliver", "first_name" => "Lucas"
        ]);
        Teacher::create([
            'salutation' => "Dr", "last_name" => "William", "first_name" => "Liam"
        ]);
        Teacher::create([
            'salutation' => "Dr", "last_name" => "Harper", "first_name" => "Isabella"
        ]);
    }
}
