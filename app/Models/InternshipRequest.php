<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipRequest extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_request';
    protected $table = 'request';
    public $timestamps=false;
    protected $fillable = [
        'id_request' ,
        'date_request' ,
        'state_request' ,
        'state_request_head' ,
        'state_request_supervisor' ,
        'id_internship' ,
        'id_student' ,
        'id_internship_supervisor',
        'id_company',
    ];

    public function student(){
        return $this->belongsTo('App\Models\Student','id_student','id_student');
    }


    public function internship()
    {
        return $this->belongsTo(Internship::class, 'id_internship');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'id_company');
    }

    public function notifyHeadOfDepartment()
    {

    $headOfDepartment = User::where('userType', 'head_of_department')->first();
    $this->student->notify(new NewRequest($this));
    
    }
}


