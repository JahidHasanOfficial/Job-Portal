<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobExperiences extends Model
{
    use HasFactory;
    
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
