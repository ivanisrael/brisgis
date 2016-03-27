<?php

namespace brisgis\Output;

use brisgis\Output\Contracts\ProvinceShowInterface;

class ProvinceShowText implements ProvinceShowInterface
{
	public function show_all($barangay)
	{
		return $barangay;
	}

	public function show($barangay)
	{
		return $barangay;
	}
	
}