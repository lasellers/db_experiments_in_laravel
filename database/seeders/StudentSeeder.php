<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'last_name' => 'Smith', 'first_name' => 'John', 'middle_name' => 'James', 'address' => '123 Street', 'state' => 'TX'
        ]);
        Student::create([
            'last_name' => 'Mason', 'first_name' => 'Lucas', 'middle_name' => 'James', 'address' => '51 Street', 'state' => 'NY'
        ]);
        Student::create([
            'last_name' => 'Smith', 'first_name' => 'John', 'middle_name' => 'James', 'address' => '333 Street', 'state' => 'CA'
        ]);
        Student::create([
            'last_name' => 'William', 'first_name' => 'Noah', 'middle_name' => 'Elijah', 'address' => '951 Street', 'state' => 'FL'
        ]);
        Student::create([
            'last_name' => 'Blake', 'first_name' => 'Benjamin', 'middle_name' => 'Elijah', 'address' => '952 Street', 'state' => 'FL'
        ]);
    }
}
