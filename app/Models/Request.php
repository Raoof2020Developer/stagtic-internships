<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_request';
    protected $table = 'request';
    public $timestamps=false;
    protected $fillable = [
        'id_request' ,
        'date_request' ,
        'state_request' ,
        'id_internship' ,
        'id_student' ,
    ];

    public function student(){
        return $this->belongsTo('App\Models\Student','id_student','id_student');
    }
}
