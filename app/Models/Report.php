<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_report';
    protected $table = 'report';
    public $timestamps=false;
    protected $fillable = [
        'id_report' ,
        'state_report' ,
        'report_path' ,
        'id_internship' ,
        'id_student' ,
    ];

    public function student(){
        return $this->belongsTo('App\Models\Student','id_student','id_student');
    }

    public function internship(){
        return $this->belongsto('App\Models\Internship','id_internship','id_internship');
    }
}
