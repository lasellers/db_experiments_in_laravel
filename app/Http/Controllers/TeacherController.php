<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeacherController extends Controller
{
    public function index() {
        return Teacher::all();
    }

    public function getAll(Request $request)
    {
        try {
            $comments = Teacher::with(['patient', 'practitioner'])
                ->orderBy('id', 'desc')
                ->get();
            return response()->json($comments->toArray());
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Teacher lookup error ' . $e->getMessage(),
                Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        }
    }

}
