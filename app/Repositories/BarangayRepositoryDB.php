<?php

namespace brisgis\Repositories;

use Illuminate\Http\Request;
use App\Http\Requests;
use brisgis\Barangay;
use brisgis\Repositories\Contracts\BarangayRepositoryInterface;

/**
 * Class BarangayRepositoryDB
 * @package brisgis\Repositories
 */
class BarangayRepositoryDB implements BarangayRepositoryInterface 
{
    public function get_all() 
    {
        return Barangay::all();
    }

    public function get($id) 
    {
        return Barangay::find($id);
    }

	public function set(Request $request)
	{
		$inputs = $request->all();

		return Barangay::create($inputs);

	}

	public function update(Request $request, $id)
	{
        $updates = $request->all();
        
        $barangay = Barangay::find($id);
        return $barangay->update($updates);

	}

	public function delete($id)
	{
		return Barangay::destroy($id);

	}


}