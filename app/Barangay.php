<?php

namespace brisgis;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
    private $id;
    private $name;
    private $municipality;
    private $area;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'municipality', 'area',
    ];

}
