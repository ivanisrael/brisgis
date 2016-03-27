<?php

namespace brisgis\Http\Controllers;

use Illuminate\Http\Request;
use brisgis\Http\Requests;
use brisgis\ProvinceCRUD;
use brisgis\Repositories\Contracts\ProvinceRepositoryInterface;
use brisgis\Repositories\ProvinceReposritoryDB;
use brisgis\Output\Contracts\ProvinceShowInterface;
use brisgis\Output\ProvinceShowText;


class ProvinceController extends Controller
{
    /**
     * @var BarangayRepositoryInterface
     */
    private $repo;
    /**
     * @var BarangayShowInterface
     */
    private $output;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProvinceRepositoryInterface $repo, ProvinceShowInterface $output)
    {
        $this->middleware('auth');
        $this->repo = $repo;
        $this->output = $output;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = new ProvinceCRUD();
        $provinces->getAllProvince($this->repo);
        return view('pages.provinces.index')->with('provinces',$provinces->showAllProvince($this->output));
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
        return view('pages.provinces.show')->with('province',$province->showProvince($this->output));
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
        //
    }
}
