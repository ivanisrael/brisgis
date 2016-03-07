<?php

namespace brisgis;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    private $city_id;
    private $city_name;
    private $region;
    private $province;

    function setCityName($city_name)
    {
    	$this->$city_name = city_name;
    }
    
}
