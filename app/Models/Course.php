<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function teacher() //: belongsTo
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
