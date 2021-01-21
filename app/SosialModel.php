<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SosialModel extends Model
{
    public $timestamps = false;
    protected $table = 'tb_mediasoal';
    protected $primaryKey = 'id_sosial';
    protected $fillable = [
        'kategori','link'
    ];
}
