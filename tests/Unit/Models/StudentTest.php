<?php
/*
./vendor/bin/phpunit tests/Unit/Models/StudentTest.php
*/

namespace Tests\Unit\Models;

use App\Models\Student;
use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * @test
     */
    public function courses()
    {
        $mock = $this->getMockBuilder(Student::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['belongsToMany'])
            ->getMock();

        $mock->expects($this->once())
            ->method('belongsToMany')
            ->will($this->returnSelf());

        $result = $mock->courses();
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
