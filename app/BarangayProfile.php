<?php

namespace brisgis;

use brisgis\Output\Contracts\BarangayShowInterface;
use brisgis\Repositories\Contracts\BarangayRepositoryInterface;

class BarangayProfile
{
    private $barangay;

    function __construct(BarangayRepositoryInterface $repo, $id)
    {
        $this->barangay = $repo->get($id);
    }

    public function show(BarangayShowInterface $i)
    {
    	return $i->show($this->barangay);
    }
}
