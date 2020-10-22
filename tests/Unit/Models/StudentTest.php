<?php
/*
./vendor/bin/phpunit tests/Unit/Models/StudentTest.php
*/

namespace Tests\Unit\Models;

use App\Models\Student;
use App\Models\Courses;
use App\Models\Teacher;
use Tests\TestCase;

class StudentTest extends TestCase
{
    const UNIT_EXPECTED_STRING = "mock";
    protected $modelClassName = Student::class;

    /**
     * @test
     */
    public function courses()
    {
        $mock = $this->getMockBuilder($this->modelClassName)
            ->disableOriginalConstructor()
            ->onlyMethods(['belongsToMany'])
            ->getMock();

        $mock->expects($this->once())
            ->method('belongsToMany')
            //->with($this->equalTo(Courses::class))
            ->will($this->returnSelf());

        $result = $mock->courses();
        // $this->assertEquals(self::UNIT_EXPECTED_STRING, $result);
    }

    /**
     * test
     */
   /* public function teachers()
    {
        $mock = $this->getMockBuilder($this->modelClassName)
            ->disableOriginalConstructor()
            ->onlyMethods(['belongsTo'])
            ->getMock();

        $mock->expects($this->once())
            ->method('belongsTo')
            ->with($this->equalTo(Teacher::class))
            ->will(self::returnSelf());
           // ->will($this->returnValue(self::UNIT_EXPECTED_STRING));

        $result = $mock->teachers();
       // $this->assertEquals(self::UNIT_EXPECTED_STRING, $result);
    } */
}
