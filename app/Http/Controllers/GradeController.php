<?php

namespace App\Http\Controllers;

use App\Http\Requests\GradeRequest;
use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function all()
    {
        return Grade::with(['student', 'course'])->get();
    }

    public function getById(GradeRequest $request)
    {
        $id = $request->get('id');
        try {
            return Grade::with(['student', 'course'])->findOrFail($id);
        } catch (\Exception $e) {
            return self::returnAPIError($e);
        }
    }

}
