<?php

namespace brisgis\Repositories\Contracts;

/**
 * Interface BarangayRepository
 * @package brisgis\Repositories\Contracts
 */
interface BarangayRepositoryInterface {

    /**
     * @param $id
     * @return mixed
     */
    public function get_all();

    public function get($id);

}