<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function all()
    {
        return Video::all();
    }

    public function getById($id)
    {
        return Video::find($id);
    }

}
