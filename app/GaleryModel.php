<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleryModel extends Model
{
    public $timestamps = false;
    protected $table = 'tb_gallery';
    protected $primaryKey = 'id_gallery';
    protected $fillable = [
        'foto'
    ];
}
