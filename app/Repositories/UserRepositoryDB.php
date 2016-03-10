<?php

namespace brisgis\Repositories;

use brisgis\User;
use brisgis\Repositories\Contracts\UserRepositoryInterface;

/**
 * Class UserRepositoryDB
 * @package brisgis\Repositories
 */
class UserRepositoryDB implements UserRepositoryInterface {

    /**
     * Return invoice from the database
     * @param $id - The ID of the requested invoice
     * @return Eloquent object
     */
    public function get($id) {
        return User::find($id);
    }

}