<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkModel extends Model
{
    public $timestamps = false;
    protected $table = 'tb_link';
    protected $primaryKey = 'id_link';
    protected $fillable = [
        'link'
    ];
}
