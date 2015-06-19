<?php

class ManageofficerController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Manageofficer::All();
		return View::make("manageofficer.index")->with("data", $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manageofficer.index');
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
        'telp' => 'required',
        'alamat' => 'required'
        );
    
        $validation = Validator::make(Input::all(), $rules);
        if($validation->fails()) {
        return Redirect::back()->withInput()->withErrors($validation->messages());
        }
        else{
        $manageadmin = new Manageofficer;

		$manageadmin->nama = Input::get('nama');
        $manageadmin->pass = Input::get('pass');
        $manageadmin->telp = Input::get('telp');
        $manageadmin->alamat = Input::get('alamat');

		$manageadmin->save();
		return Redirect::to('manageofficer');
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
		$manageofficer = DB::table('manageofficers')->where('id',$id)->first();
      $manageofficer =
      ['manageofficersbyid' => $manageofficer];
  return View::make('Manageofficer.edit', $manageofficer);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
				$rules = array(
            'nama' => 'required',
            'pass' => 'required',
            'telp' => 'required',
            'alamat' => 'required'
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('Manageofficer/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('manageofficers')
      ->where('id', $id)
      ->update(array(
                  'nama' => Input::get('nama'),
                  'pass' => Input::get('pass'),
                  'telp' => Input::get('telp'),
                  'alamat' => Input::get('alamat')
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('manageofficer');
      }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$data = Manageofficer::find($id);
		$data->delete();
		return Redirect::to("manageofficer");
	}


}
