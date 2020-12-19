<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'tb_user';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'nama_user', 'username', 'password','password_repeat'
    ];
}
