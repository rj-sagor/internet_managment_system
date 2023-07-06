<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComputerInformation extends Model
{
    use HasFactory;

    public function Info_to_user(){
        return $this->belongsTo(All_User::class,"user_id","id");
    }

    public function Info_to_printer(){
        return $this->belongsTo(Printer::class,"user_id","user_id");
    }

    public function Info_to_scanner(){
        return $this->belongsTo(Scanner::class,"user_id","user_id");
    }
}
