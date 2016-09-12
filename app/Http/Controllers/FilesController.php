<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;

class FilesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return Response::json(200, 'success');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Get files and set variables
		$file            = Input::file('file');
		$identifier      = date("Ymd") . "_" . Session::get('lastName') . "_" . Session::get('firstName');
		
		$destinationPath = base_path() . '/uploads/'. $identifier ;
		$extension       = $file->getClientOriginalExtension();


		// Create incrementing imageID
		if(!Session::has('imageID')) {
			Session::put([
				'imageID' => 1,
			]); 
			$imageID = Session::get('imageID');
		} else {
			$imageID = Session::get('imageID');
			$imageID++;
			Session::put(['imageID' => $imageID]);
		}


		// Create Filename
		$filename        = $identifier . "_" . $imageID . "." . $extension;


		// Save filepaths into Session to be able to display files afterwards
		Session::put([
			'files.' . $imageID => $destinationPath . "/" . $filename,
		]);


		$upload_success = Input::file('file')->move($destinationPath, $filename);


        if( $upload_success ) {
        	return Response::json('success', 200);
        } else {
        	return Response::json('error', 400);
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
