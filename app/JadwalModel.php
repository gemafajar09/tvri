<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalModel extends Model
{
    public $timestamps = false;
    protected $table = 'tb_jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = [
        'tanggal','jam','nama_acara','filter'
    ];
}
