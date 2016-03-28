<?php

namespace brisgis;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    private $id;
    private $province_id;
    private $name;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'province_id', 'name',
    ];

}
