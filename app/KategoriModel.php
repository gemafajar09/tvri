<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    public $timestamps = false;
    protected $table = 'tb_kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = [
        'kategori'
    ];
}
