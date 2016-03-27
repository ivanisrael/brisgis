<?php

namespace brisgis;

use Illuminate\Http\Request;
use brisgis\Http\Requests;
use brisgis\Repositories\Contracts\ProvinceRepositoryInterface;
use brisgis\Output\Contracts\ProvinceShowInterface;

class ProvinceCRUD
{
	private $province;

	public function getAllProvince(ProvinceRepositoryInterface $repo)
	{
		$this->province = $repo->get_all();
	}

	public function showAllProvince(ProvinceShowInterface $i)
	{
		return $i->show_all($this->province);
	}

	function getProvince(ProvinceRepositoryInterface $repo, $id)
    {
        $this->province = $repo->get($id);
    }

    public function showProvince(ProvinceShowInterface $i)
    {
    	return $i->show($this->province);
    }

    public function createProvince(ProvinceRepositoryInterface $repo, Request $request)
    {
        $this->province = $repo->set($request);
    }

    public function updateProvince(ProvinceRepositoryInterface $repo, Request $request, $id)
    {
        $this->province = $repo->update($request, $id);
    }

}