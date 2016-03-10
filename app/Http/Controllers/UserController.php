<?php

namespace brisgis\Http\Controllers;

use Illuminate\Http\Request;

use brisgis\Http\Requests;
use brisgis\UserList;
use brisgis\Output\Contracts\UserShowInterface;
use brisgis\Output\UserShowText;
use brisgis\Repositories\Contracts\UserRepositoryInterface;
use brisgis\Repositories\UserRepositoryDB;

class UserController extends Controller
{
    /**
     * @var InvoiceRepositoryInterface
     */
    private $repo;
    /**
     * @var InvoiceShowInterface
     */
    private $output;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepositoryInterface $repo, UserShowInterface $output)
    {
        $this->repo = $repo;
        $this->output = $output;
    }

    /**
     * Show invoice
     *
     * @return Response
     */
    public function index()
    {
        $user = new UserList($this->repo,1);
        return view('pages.users.index')->with('user',$user->show($this->output));

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
