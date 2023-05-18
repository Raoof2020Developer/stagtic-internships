<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_faculty';
    protected $table = 'faculty';
    public $timestamps=false;
    protected $fillable = [
        'id_faculty' ,
        'id_university' ,
        'name_faculty' ,
        'name_dean' ,
    ];

    public function deprtments(){
        return $this->hasMany('App\Models\Department','id_faculty','id_faculty');
    }
}
