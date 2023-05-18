<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Supervisor extends Authenticatable
{
    use HasFactory;
    protected $primaryKey = 'id_internship_supervisor';
    protected $table = 'internship_supervisor';
    public $timestamps=false;
    protected $fillable = [
        'first_name_internship_supervisor' ,
        'last_name_internship_supervisor' ,
        'phone_internship_supervisor' ,
        'email_internship_supervisor',
    ];

    

    public function company(){
        return $this->belongsTo('App\Models\Company','id_company','id_company');
    }

    public function notes(){
        return $this->hasMany('App\Models\Note','id_internship_supervisor','id_internship_supervisor');
    }

    public function internships(){
        return $this->hasMany(Internship::class);
    }

    public function certificates(){
        return $this->hasMany('App\Models\Certificate','id_internship_supervisor','id_internship_supervisor');
    }

    public function absencess(){
        return $this->hasMany('App\Models\Absence','id_internship_supervisor','id_internship_supervisor');
    }

}
