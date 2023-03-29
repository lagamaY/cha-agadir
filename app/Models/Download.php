<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Download extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'file',
        'course_id'
    ];
    
    public function course() {
        return $this->BelongsTo(Course::class);
    }
}