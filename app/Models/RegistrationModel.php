<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationModel extends Model
{
    use HasFactory;
    public $table="users";
    public $fillable=['name','email','password','dob','gender','income','occupation','ftype','manglik','user_id','eincome','eoccupation','eftype','emanglik'];
    public $timestamps=false;
}
