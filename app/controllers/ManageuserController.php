<?php

class ManageuserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Manageuser::All();
		return View::make("manageuser.index")->with("data", $data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manageuser.index');
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
		return Redirect::to('manageuser');
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
		$manageuser = DB::table('manageusers')->where('id',$id)->first();
      $manageuser =
      ['manageusersbyid' => $manageuser];
  return View::make('Manageuser.edit', $manageuser);
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
            'noplat' => 'required',
            'alamat' => 'required',
            'nosim' => 'required',
            'jenissim' => 'required',
            'telp' => 'required'
      );
 
      $validator = Validator::make(Input::all(), $rules);
 
      if ($validator->fails()) {   
            echo "string";
            return Redirect::to('Manageuser/edit/'.$id)->withErrors($validator)->withInput();
      } else {
      DB::table('manageusers')
      ->where('id', $id)
      ->update(array(
                  'nama' => Input::get('nama'),
                  'pass' => Input::get('pass'),
                  'noplat' => Input::get('noplat'),
                  'alamat' => Input::get('alamat'),
                  'nosim' => Input::get('nosim'),
                  'jenissim' => Input::get('jenissim'),
                  'telp' => Input::get('telp')
                  
            ));
 
      Session::flash('message', 'Data Berhasil Diubah');
      return Redirect::to('manageuser');
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
		$data = Manageuser::find($id);
		$data->delete();
		return Redirect::to("manageuser");
	}


}
