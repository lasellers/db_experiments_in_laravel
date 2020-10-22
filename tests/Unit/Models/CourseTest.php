<?php
/*
./vendor/bin/phpunit tests/Unit/Models/StudentTest.php
*/

namespace Tests\Unit\Models;

use App\Models\Student;
use App\Models\Course;
use App\Models\Teacher;
use Tests\TestCase;

class CourseTest extends TestCase
{
    //const UNIT_EXPECTED_STRING = "mock";
    //protected $modelClassName = Course::class;

    /**
     * @test
     */
    public function teacher()
    {
        $mock = $this->getMockBuilder(Course::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['belongsTo'])
            ->getMock();

        $mock->expects($this->once())
            ->method('belongsTo')
            ->with(
                $this->equalTo(Teacher::class),
                $this->equalTo('teacher_id'),
                $this->equalTo('id')
            )
            ->will(self::returnSelf());

        $mock->teacher();
    }
}
