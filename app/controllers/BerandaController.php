<?php

class BerandaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make("home.index");
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('home.index');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
        'nama' => 'required',
        'pass' => 'required',
        'noplat' => 'required',
        'alamat' => 'required',
        'nosim' => 'required',
        'jenissim' => 'required',
        'telp' => 'required'
        );
    
        $validation = Validator::make(Input::all(), $rules);
        if($validation->fails()) {
        return Redirect::back()->withInput()->withErrors($validation->messages());
        }
        else{
        $manageuser = new Manageuser;

		$manageuser->nama = Input::get('nama');
        $manageuser->pass = Input::get('pass');
        $manageuser->noplat = Input::get('noplat');
        $manageuser->alamat = Input::get('alamat');
        $manageuser->nosim = Input::get('nosim');
        $manageuser->jenissim = Input::get('jenissim');
        $manageuser->telp = Input::get('telp');

		$manageuser->save();
		return Redirect::to('parking');
        }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
