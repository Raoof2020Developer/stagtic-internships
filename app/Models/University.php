<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_university';
    protected $table = 'university';
    public $timestamps=false;
    protected $fillable = [
        'id_university',
        'nom_university' ,
        'adresse' ,
        'name_rector' ,
    ];
}
