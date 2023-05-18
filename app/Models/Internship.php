<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_internship';
    protected $table = 'internship';
    public $timestamps=false;
    protected $fillable = [
        'start_date' ,
        'end_date' ,
        'internship_theme' ,
        'workplan' ,
        'period' ,
    ];

    public function internshipRequests()
    {
        return $this->hasMany(InternshipRequest::class, 'id_internship');
    }

    public function reports(){
        return $this->hasMany('App\Models\Report','id_internship','id_internship');
    }

    public function supervisor(){
        return $this->belongsTo('App\Models\Supervisor','id_internship_supervisor','id_internship_supervisor');
    }
}
