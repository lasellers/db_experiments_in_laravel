<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Grade extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function student() //: belongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function course() //: belongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
