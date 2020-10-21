<?php

namespace spec\App\Models;

use App\Models\Student;
use PhpSpec\ObjectBehavior;

class StudentSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Student::class);
    }
}
