<?php
/*
./vendor/bin/phpunit tests/Unit/Models/StudentTest.php
*/

namespace Tests\Unit\Models;

use App\Models\Student;
use Tests\TestCase;
use Illuminate\Support\Collection;

class StudentServiceTest extends TestCase
{
    /**
     * test
     */
    public function teachers()
    {
        $mock = $this->getMockBuilder(Student::class)
            ->disableOriginalConstructor()
            ->onlyMethods(['select'])
            ->getMock();

        $mock->expects($this->once())
            ->method('select')
            //->with($this->equalTo(Courses::class))
            ->will($this->returnSelf());

        $result = $mock->teachers();
        $this->assertInstanceOf(Collection::class, $result);
    }
}
