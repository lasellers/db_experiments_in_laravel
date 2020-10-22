<?php

namespace App\Http\Controllers;

use App\Http\Requests\GradeRequest;
use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Grade::with(['student', 'course'])->get();
    }

    /**
     * @param GradeRequest $request
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse
     */
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
