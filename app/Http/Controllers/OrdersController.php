<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\Response;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
// use Illuminate\Support\Facades\Request
// use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

// use Request;
// use Response;

class OrdersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view('orders.index');
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
		// 
		dd(Session::all());


		Order::create([
			'firstName'        => Session::get('firstName'),
			'lastName'         => Session::get('lastName'),
			'email'            => Session::get('email'),
			'phone'            => Session::get('phone'),
			'city'             => Session::get('city'),
			'householdCount'   => Session::get('householdCount'),
			'comments'         => Session::get('comments'),
			'payment-method'   => Session::get('payment-method'),
			'terms-of-service' => Session::get('terms-of-service'),
		]);

		return View::make('pages.thankyou');
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

	public function showSession() {
		return Session::all();
	}

	public function flushSession() {
		Session::flush();
		return Redirect::route('step1');
	}


	public function thankyou() {
		return View::make('pages.thankyou');
	}
}
