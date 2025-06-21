<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CenergiaModel extends Model
{
    protected $table = 'pessoa';
    protected $fillable = ['name','id','email','bi','cargo','date','created_at','updated_at'];
}
