<?php
/*
./vendor/bin/phpunit tests/Integration/Models/TeacherTest.php
*/

namespace Tests\Integration\Services;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use App\Services\StudentService;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\CourseStudent;

class StudentServiceTest extends TestCase
{
    use DatabaseTransactions;

    /** @var StudentService */
    protected $service;

    protected function setUp(): void
    {
        parent::setUp();
        $this->service = new StudentService();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function courses()
    {
        //
        $relations = $this->service->teachers();
        $this->assertNotNull($relations);
        $items = $relations->toArray();
        $this->assertCount(8, $items);
    }

    /**
     * @test
     * @throws \Exception
     */
    public function coursesNew()
    {
        $student = Student::factory()->create();
        $teacher = Teacher::factory()->create();

        $course1 = Course::factory()->create(['teacher_id' => $teacher->id]);
        $course2 = Course::factory()->create(['teacher_id' => $teacher->id]);

        $courseStudent1 = CourseStudent::factory()->create([
            'course_id' => $course1->id,
            'student_id' => $student->id,
        ]);
        $courseStudent2 = CourseStudent::factory()->create([
            'course_id' => $course2->id,
            'student_id' => $student->id,
        ]);

        //
        $relations = Student::with('courses')
            ->find($student->id);
        $this->assertNotNull($relations);
        $item = $relations->toArray();

        $this->assertEquals($student->id, $item['id']);

        $this->assertCount(2, $item['courses']);

        //
        $courseStudent2->delete();
        $courseStudent1->delete();
        $course2->delete();
        $course1->delete();
        $teacher->delete();
        $student->delete();
    }

    /**
     * @test
     */
    public function teachers()
    {
        //
        $relations = $this->service->teachers();
        $this->assertNotNull($relations);
        $items = $relations->toArray();
        $this->assertCount(8, $items);
    }

    /**
     * test
     * @todo
     */
    public function teachers2()
    {
        //
        $relations = $this->service->teachers2();
        $this->assertNotNull($relations);
        $items = $relations->toArray();
        $this->assertCount(5, $items);
        $this->assertCount(2, $items[0]['courses']);
    }
}
