<?php

namespace brisgis;

use brisgis\Output\Contracts\BarangayShowInterface;
use brisgis\Repositories\Contracts\BarangayRepositoryInterface;

class BarangayList
{
    private $barangay;

    function __construct(BarangayRepositoryInterface $repo)
    {
        $this->barangay = $repo->get_all();
    }

    public function show_all(BarangayShowInterface $i)
    {
        return $i->show_all($this->barangay);
    }
}
