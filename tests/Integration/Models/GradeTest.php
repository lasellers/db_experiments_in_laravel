<?php
/*
./vendor/bin/phpunit tests/Integration/Models/TeacherTest.php
*/

namespace Tests\Integration\Models;

use App\Models\Teacher;
use App\Models\Course;
use App\Models\Grade;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class GradeTest extends TestCase
{
    use DatabaseTransactions;

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function student()
    {
        $relations = Grade::with('student')->get();
        $this->assertNotNull($relations);
        $items = $relations->toArray();
        $this->assertCount(4, $items);
        foreach ($items as $item) {
            $this->assertEquals($item['student_id'], $item['student']['id']);
        }
    }

    /**
     * @test
     */
    public function course()
    {
        $relations = Grade::with('course')->get();
        $this->assertNotNull($relations);
        $items = $relations->toArray();
        $this->assertCount(4, $items);
        foreach ($items as $item) {
            $this->assertEquals($item['course_id'], $item['course']['id']);
        }
    }

    /**
     * test
     * throws \Exception
     */
    public function teacherNew()
    {
        $teacher = Teacher::factory()->create();

        $course = Course::factory()->create([
            'teacher_id' => $teacher->id
        ]);

        //
        $relations = Course::with('teacher')
            ->find($course->id);

        $this->assertNotNull($relations);
        $item = $relations->toArray();

        $this->assertEquals($course->teacher_id, $item['teacher']['id']);

        //
        $course->delete();
        $teacher->delete();
    }
}
