<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TentangModel extends Model
{
    public $timestamps = false;
    protected $table = 'tb_tentang';
    protected $primaryKey = 'id_tentang';
    protected $fillable = [
        'title','type','isi'
    ];
}
