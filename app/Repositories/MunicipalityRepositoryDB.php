<?php

namespace brisgis\Repositories;


use DB;
use brisgis\Municipality;
use Illuminate\Http\Request;
use App\Http\Requests;
use brisgis\Repositories\Contracts\MunicipalityRepositoryInterface;

/**
 * Class MunicipalityRepositoryDB
 * @package brisgis\Repositories
 */
class MunicipalityRepositoryDB implements MunicipalityRepositoryInterface 
{
	public function get_all($province_id)
	{
		return DB::statement("SELECT provinces.name, provinces.id, municipalities.id, municipalities.name from provinces, municipalities where provinces.id = municipalities.province_id and provinces.id = ".$province_id.";");
		
	}

	public function set(Request $request, $province_id)
	{
		$inputs = $request->all();

		return Municipality::create($inputs);

	}

	public function update(Request $request, $province_id, $id)
	{
        $updates = $request->all();
        
        $province = Municipality::find($id);
        return $province->update($updates);

	}

	public function delete($province_id, $id)
	{
		return Municipality::destroy($id);

	}

}