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
            'salutation' => "Dr", "last_name" => "Booker", "first_name" => "John", "email"=>"jon_booker@college.com"
        ]);
        Teacher::create([
            'salutation' => "Dr", "last_name" => "Booker", "first_name" => "James", "email"=>"james_booker@college.com"
        ]);
        Teacher::create([
            'salutation' => "Dr", "last_name" => "Brooke", "first_name" => "Kelly", "email"=>"kelly_brooke@college.com"
        ]);
        Teacher::create([
            'salutation' => "Dr", "last_name" => "James", "first_name" => "Debbie", "email"=>"debbie_james@college.com"
        ]);
        Teacher::create([
            'salutation' => "Dr", "last_name" => "Kneller", "first_name" => "Kevin", "email"=>"kevin_kneller@college.com"
        ]);
    }
}
