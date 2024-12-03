<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\grade;
use App\Models\Department; 

class Student extends Model
{
    use HasFactory;

    protected $with = ['grade', 'department']; 
    /**
     * Relationship to the Grade model.
     */
    public function grade(): BelongsTo
    {
        return $this->belongsTo(grade::class);
    }

    /**
     * Relationship to the Department model.
     */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
