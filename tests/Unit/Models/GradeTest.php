<?php
/*
./vendor/bin/phpunit tests/Unit/Models/StudentTest.php
*/

namespace Tests\Unit\Models;

use App\Models\Student;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Grade;
use Tests\TestCase;

class GradeTest extends TestCase
{
    const UNIT_EXPECTED_STRING = "mock";
    protected $modelClassName = Grade::class;

    /**
     * @test
     */
    public function student()
    {
        $mock = $this->getMockBuilder(Grade::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['belongsTo'])
            ->getMock();

        $mock->expects($this->once())
            ->method('belongsTo')
            ->with($this->equalTo(Student::class))
            ->will($this->returnSelf());

        $result = $mock->student();
    }

    /**
     * @test
     */
    public function course()
    {
        $mock = $this->getMockBuilder(Grade::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['belongsTo'])
            ->getMock();

        $mock->expects($this->once())
            ->method('belongsTo')
            ->with($this->equalTo(Course::class))
            ->will($this->returnSelf());

        $result = $mock->course();
    }
}
