<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    public $timestamps = false;
    protected $table = 'tb_slider';
    protected $primaryKey = 'id_slider';
    protected $fillable = [
        'description', 'image'
    ];
}
