<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentClass extends Model
{
    use HasFactory;

    protected $fillable = [
        "student_classes", "student_id", 
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
