<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutorModel extends Model
{
    use HasFactory;

    protected $table = "tutor";
    protected $fillable = ['Id_Tutor','Nome','Idade','Telefone','Email'];

}

