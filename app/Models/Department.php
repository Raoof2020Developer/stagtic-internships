<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_department';
    protected $table = 'department';
    public $timestamps=false;
    protected $fillable = [
        'id_faculty' ,
        'name_department' ,
        'name_head_of_department' ,
    ];

    public function heads(){
        return $this->hasOne('App\Models\HeadOfDepartment','id_department','id_department');
    }

    public function faculty(){
        return $this->belongsTo('App\Models\Faculty','id_faculty','id_faculty');
    }

    public function students()
    {
    return $this->hasMany(Student::class);
    }
}
