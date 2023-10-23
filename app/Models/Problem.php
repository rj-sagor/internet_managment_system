<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function problem_to_designation(){
        return $this->belongsTo(designation::class,"designation_id","id");
    }

    public function problem_to_problem(){
        return $this->belongsTo(ProblemList::class,"problem_id","id");
    }
    public function problem_to_department(){
        return $this->belongsTo(Department::class,"department_id","id");
    }


}
