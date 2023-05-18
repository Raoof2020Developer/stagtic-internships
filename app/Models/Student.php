<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'id_student';
    protected $table = 'student';
    public $timestamps=false;
    protected $fillable = [
        'id_user',
        'security_number' ,
        'card_number' ,
        'date_of_birth' ,
        'speciality' ,
        'level' ,
        'semester' ,
        'college_year' ,
        'first_name_student' ,
        'last_name_student' ,
        'phone_student' ,
        'email_student' ,
    ];

    public function setPtypeAttribute($value) {
        $this->attributes['level'] = json_encode($value);
    }

    public function getPtypeAttribute($value) {
        return $this->attributes['level'] = json_decode($value);
    }
    protected $casts = [
        'level' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function absences(){
        return $this->hasMany('App\Models\Absence','id_student','id_student');
    }

    public function requests(){
        return $this->hasMany('App\Models\Request','id_student','id_student');
    }

    public function certificate(){
        return $this->hasOne('App\Models\Certificate','id_student','id_student');
    }

    public function note(){
        return $this->hasOne('App\Models\Note','id_student','id_student');
    }

    public function report(){
        return $this->hasOne('App\Models\Report','id_student','id_student');
    }

    public function department(){
        return $this->belongsTo(Department::class,'id_department');
    }
}
