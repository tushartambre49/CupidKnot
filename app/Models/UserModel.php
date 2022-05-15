<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    public $table='gusers';
    public $fillable=['name','email','user_id'];
    public $timestamps=false;
}
