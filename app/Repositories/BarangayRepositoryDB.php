<?php

namespace brisgis\Repositories;

use brisgis\Barangay;
use brisgis\Repositories\Contracts\BarangayRepositoryInterface;

/**
 * Class BarangayRepositoryDB
 * @package brisgis\Repositories
 */
class BarangayRepositoryDB implements BarangayRepositoryInterface {

    /**
     * Return invoice from the database
     * @param $id - The ID of the requested invoice
     * @return Eloquent object
     */
    public function get_all() {
        return Barangay::all();
    }

    public function get($id) {
        return Barangay::find($id);
    }

}