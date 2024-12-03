<?php

namespace App\Models;

use App\Models\grade;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    public function grades()
    {
        return $this->hasMany(grade::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
