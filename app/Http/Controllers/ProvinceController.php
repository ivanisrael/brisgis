<?php

namespace brisgis\Http\Controllers;

use Illuminate\Http\Request;
use brisgis\Http\Requests;
use brisgis\ProvinceCRUD;
use brisgis\Repositories\Contracts\ProvinceRepositoryInterface;
use brisgis\Output\Contracts\ProvinceShowInterface;
use brisgis\MunicipalityCRUD;
use brisgis\Repositories\Contracts\MunicipalityRepositoryInterface;
use brisgis\Output\Contracts\MunicipalityShowInterface;


class ProvinceController extends Controller
{
    /**
     * @var ProvinceRepositoryInterface
     */
    private $repo;
    /**
     * @var ProvinceShowInterface
     */
    private $output;
    /**
     * @var MunicipalityRepositoryInterface
     */
    private $municipality_repo;
    /**
     * @var MunicipalityShowInterface
     */
    private $municipality_output;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProvinceRepositoryInterface $repo, 
                                ProvinceShowInterface $output,
                                MunicipalityRepositoryInterface $municipality_repo, 
                                MunicipalityShowInterface $municipality_output)
    {
        $this->middleware('auth');
        $this->repo = $repo;
        $this->output = $output;
        $this->municipality_repo = $municipality_repo;
        $this->municipality_output = $municipality_output;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = new ProvinceCRUD();
        $provinces->getAllProvinces($this->repo);

        //return view('pages.provinces.index')->with('provinces',$provinces->showAllProvinces($this->output));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $province = new ProvinceCRUD();
        $province->createProvince($this->repo, $request);
        return redirect()->route('provinces.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $province = new ProvinceCRUD();
        $province->getProvince($this->repo, $id);
        $municipalities = new MunicipalityCRUD();
        $municipalities->getAllMunicipalities($this->municipality_repo, $id);
        return view('pages.provinces.show')
                        ->with('province',$province->showProvince($this->output))
                        ->with('municipalities', $municipalities->showAllMunicipalities($this->municipality_output));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $province = new ProvinceCRUD();
        $province->updateProvince($this->repo, $request, $id);
        return redirect()->route('provinces.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $province = new ProvinceCRUD();
        $province->deleteProvince($this->repo, $id);
        return redirect()->route('provinces.index');
    }
}
