<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicing extends Model
{
    use HasFactory;
    public function service_to_user(){
        return $this->belongsTo(All_User::class,"user_name_id","id");
    }
}
