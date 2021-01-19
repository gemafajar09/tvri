<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RateModel extends Model
{
    public $timestamps = false;
    protected $table = 'tb_rate';
    protected $primaryKey = 'id_rate';
    protected $fillable = [
        'kategori_rate','image_rate','deskripsi_rate'
    ];
}
