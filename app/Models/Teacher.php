<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * select t.*,c.* from teachers t left join courses c on c.teacher_id=t.id
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses() //: hasMany
    {
        return $this->hasMany(Course::class, 'teacher_id', 'id');
    }
}
