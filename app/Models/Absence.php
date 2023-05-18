<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_absence';
    protected $table = 'absence';
    public $timestamps=false;
    protected $fillable = [
        'id_absence' ,
        'id_internship_supervisor' ,
        'id_student' ,
        'date_absence' ,
    ];

    public function student(){
        return $this->belongsTo('App\Models\Student','id_absence','id_student');
    }
    
    public function supervisor(){
        return $this->belongsTo('App\Models\Supervisor','id_internship_supervisor','id_internship_supervisor');
    }

    
}

