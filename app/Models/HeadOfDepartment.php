<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class HeadOfDepartment extends Authenticatable
{
    use HasFactory;
    
    protected $primaryKey = 'id_head_of_department';
    protected $table = 'head_of_department';
    public $timestamps=false;
    protected $fillable = [
        'first_name_head_of_department',
        'last_name_head_of_department',
        'name_department',
        'phone_head_of_department' ,
        'email_head_of_department' ,
    ];


    

    public function department(){
        return $this->belongsTo('App\Models\Department','id_department','id_department');
    }
    

}
