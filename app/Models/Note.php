<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_note';
    protected $table = 'note';
    public $timestamps=false;
    protected $fillable = [
        'id_note' ,
        'id_student' ,
        'id_internship_supervisor' ,
        'General_discipline_and_human_relations' ,
        'work_skills_and_handling' ,
        'Initiative' ,
        'Imagination_skills_and_innovation' ,
        'Acquired_knowledge' ,
        'note' ,
        'Global_appreciation' ,
    ];

    public function student(){
        return $this->belongsTo('APP\Models\Student','id_student','id_student');
    }

    public function supervisor(){
        return $this->belongsTo('App\models\Supervisor','id_internship_supervisor','id_internship_supervisor');
    }
}
