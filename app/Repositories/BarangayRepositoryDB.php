<?php

namespace brisgis\Repositories;

use brisgis\Barangay;
use brisgis\Repositories\Contracts\BarangayRepositoryInterface;

/**
 * Class BarangayRepositoryDB
 * @package brisgis\Repositories
 */
class BarangayRepositoryDB implements BarangayRepositoryInterface 
{
    public function get_all() 
    {
        return Barangay::all();
    }

    public function get($id) 
    {
        return Barangay::find($id);
    }

}