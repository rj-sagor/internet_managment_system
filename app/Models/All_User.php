<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class All_User extends Model
{
    use HasFactory;
    public function user_to_department(){
        return $this->belongsTo(Department::class,"department_id","id");
    }
    public function user_to_designation(){
        return $this->belongsTo(designation::class,"designation_id","id");
    }
}
