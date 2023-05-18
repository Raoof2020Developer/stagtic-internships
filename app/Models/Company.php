<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_company';
    protected $table = 'company';
    public $timestamps=false;
    protected $fillable = [
        'name_company' ,
        'adresse' ,
        'phone_number' ,
        'email' ,
    ];

    public function supervisors(){
        return $this->hasMany('App\Models\Supervisor','id_internship_supervisor','id_internship_supervisor');
    }  

    public function internships(){
        return $this->hasMany('App\Models\Internship','id_company','id_company');
    }

    public function internshipRequests()
    {
        return $this->hasMany(InternshipRequest::class, 'id_company');
    }

    
}
