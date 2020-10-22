<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * @return Video[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Video::all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id): Video
    {
        return Video::find($id);
    }
}
