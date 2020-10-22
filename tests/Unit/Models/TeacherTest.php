<?php
/*
./vendor/bin/phpunit tests/Unit/Models/StudentTest.php
*/

namespace Tests\Unit\Models;

use App\Models\Student;
use App\Models\Course;
use App\Models\Teacher;
use Tests\TestCase;

class TeacherTest extends TestCase
{
    const UNIT_EXPECTED_STRING = "mock";
    protected $modelClassName = Teacher::class;

    /**
     * @test
     */
    public function courses()
    {
        $mock = $this->getMockBuilder(Teacher::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['hasMany'])
            ->getMock();

        $mock->expects($this->once())
            ->method('hasMany')
            ->with(
                $this->equalTo(Course::class),
                $this->equalTo('teacher_id'),
                $this->equalTo('id')
            )
            ->will(self::returnSelf());
        //->will($this->returnValue(self::UNIT_EXPECTED_STRING));

        $result = $mock->courses();
        //$this->assertEquals(self::UNIT_EXPECTED_STRING, $result);
    }

}
