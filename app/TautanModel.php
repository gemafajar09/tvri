<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TautanModel extends Model
{
    public $timestamps = false;
    protected $table = 'tb_tautan';
    protected $primaryKey = 'id_tautan';
    protected $fillable = [
        'nama_tautan','link_tautan'
    ];
}
