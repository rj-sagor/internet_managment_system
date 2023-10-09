<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printer extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function printer_to_user(){
        return $this->belongsTo(All_User::class,"user_id","id");
    }
    public function printer_to_department(){
        return $this->belongsTo(Department::class,"department_id","id");
    }
}
