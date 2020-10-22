<?php
/*
./vendor/bin/phpunit tests/Integration/Models/TeacherTest.php
*/

namespace Tests\Integration\Models;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\Course;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class StudentTest extends TestCase
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
    public function courses()
    {
        //
        $relations = Student::with('courses')->get();
        $this->assertNotNull($relations);
        $items = $relations->toArray();
        $this->assertCount(5, $items);
        $this->assertCount(2, $items[0]['courses']);
    }

    /**
     * test
     * @throws \Exception
     */
    public function coursesNew()
    {
        $teacher = Teacher::factory()->create();

        $course = [
            'teacher_id' => $teacher->id
        ];
        $course1 = Course::factory()->create($course);
        $course2 = Course::factory()->create($course);

        //
        $relations = Teacher::with('courses')
            ->find($teacher->id);
        $this->assertNotNull($relations);
        $item = $relations->toArray();

        $this->assertEquals($teacher->id, $item['id']);

        $this->assertCount(2, $item['courses']);

        $course2->delete();
        $course1->delete();
        $teacher->delete();
    }

    /**
     * test
     */
    public function teachers()
    {
        //
        $relations = Student::with('teachers')->get();
        $this->assertNotNull($relations);
        $items = $relations->toArray();
        $this->assertCount(5, $items);
        $this->assertCount(2, $items[0]['courses']);
    }

    /**
     * test
     */
    public function relations2()
    {
        /*
        $teacher = factory(Teacher::class)->create([
        ]);
        $this->assertModelCreated($teacher);

        // add 2 filters
        $filter1 = Filter::where("name", 'control')->first();

        $teacher->addFilter($filter1->name);
        $teacher->addFilter($filter2->name);

        //
        $relations = Teacher::with('module')
            ->with('filters')
            ->find($teacher->id);
        $this->assertNotNull($relations);
        $item = $relations->toArray();

        //
        $this->assertIsArray($item['module']);
        $this->assertEquals($item['module_id'], $item['module']['id']);

        //
        $this->assertIsArray($item['filters']);

        $this->assertCount(2, $item['filters']);

        $this->assertIsSorted($item['filters'], [
            [$filter1->id, $filter2->id],
        ]);

        $this->assertKeysPresent(Teacher::class, $item);

        // try removing the filters and see if we have a 0 count now
        $teacher->removeFilter($filter1->name);
        $teacher->removeFilter($filter2->name);

        $item = Teacher::with('module')
            ->with('filters')
            ->find($teacher->id)->toArray();
        $this->assertNotNull($item);
        $this->assertCount(0, $item['filters']);

        //
        $this->deleteAndAssertDeleted($teacher);
        */
    }
}
