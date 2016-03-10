<?php

namespace brisgis\Repositories\Contracts;

/**
 * Interface UserRepository
 * @package brisgis\Repositories\Contracts
 */
interface UserRepositoryInterface {

    /**
     * @param $id
     * @return mixed
     */
    public function get($id);

}