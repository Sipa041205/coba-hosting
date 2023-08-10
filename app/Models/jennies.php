<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDF;

class jennies extends Model
{
    use HasFactory;
    protected $table = "a";
    protected $primaryKey = "ID";
    protected $fillable = ['ID', 'NAME', 'GENDER','BIRTH_PLACE', 'BIRTH_DATE', 'ADDRESS','EMAIL', 'PHONE'];
}
