<?php

namespace brisgis\Repositories\Contracts;

/**
 * Interface BarangayRepository
 * @package brisgis\Repositories\Contracts
 */
interface BarangayRepositoryInterface 
{
    public function get_all();

    public function get($id);

}