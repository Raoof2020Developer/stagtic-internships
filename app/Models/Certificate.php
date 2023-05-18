<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_certificate';
    protected $table = 'certificate';
    public $timestamps=false;
    protected $fillable = [
        'id_student' ,
        'id_internship' ,
        'id_head_of_department' ,
        'id_internship_supervisor' ,
        'printed',
        'certificate_key'
    ];

    public function student(){
        return $this->belongsTo('App\Models\Student','id_student','id_student');
    }

    public function supervisor(){
        return $this->belongsTo('App\Models\Supervisor','id_internship_supervisor','id_internship_supervisor');
    }
}
