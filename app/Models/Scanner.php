<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scanner extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function scanner_to_user(){
        return $this->belongsTo(All_User::class,"user_id","id");
    }
    public function scanner_to_department(){
        return $this->belongsTo(Department::class,"department_id","id");
    }
}
