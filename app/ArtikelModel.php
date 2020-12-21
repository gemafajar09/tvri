<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    public $timestamps = false;
    protected $table = 'tb_artikel';
    protected $primaryKey = 'id_artikel';
    protected $fillable = [
        'tanggal', 'judul', 'foto', 'descripsi'
    ];
}
