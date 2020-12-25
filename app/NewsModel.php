<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    public $timestamps = false;
    protected $table = 'tb_news';
    protected $primaryKey = 'id_news';
    protected $fillable = [
        'tanggal','judul','deskripsi','foto'
    ];
}
