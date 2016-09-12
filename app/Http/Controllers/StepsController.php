<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class StepsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function step1()
	{
		// Create data for Modelbinding 
		// Showing already filled out values, when you return to this form.
		if(Session::has('city', 'householdCount', 'comments')) {
			$data = [
				'city'           => Session::get('city'),
				'householdCount' => Session::get('householdCount'),
				'comments'       => Session::get('comments'),
			];
		} else {
			$data = [];
		}

		return View::make('step1.create', ['modelData' => $data]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function step1store()
	{
		if(Input::has('city', 'householdCount', 'comments')) {

			Session::put([
				'city'           => Input::get('city'),
				'householdCount' => Input::get('householdCount'),
				'comments'       => Input::get('comments'),
			]);

			return Redirect::route('step2');

		} else {
			return Redirect::route('step1');
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function step2()
	{
		// Create data for Modelbinding 
		// Showing already filled out values, when you return to this form.
		if(Session::has('salutation', 'firstName', 'lastName', 'email', 'phone')) {
			$data = [
				'salutation' => Session::get('salutation'),
				'firstName'  => Session::get('firstName'),
				'lastName'   => Session::get('lastName'),
				'email'      => Session::get('email'),
				'phone'      => Session::get('phone'),
			];
		} else {
			$data = [];
		}

		return View::make('step2.create', ['modelData' => $data]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function step2store()
	{
		if(Input::has('salutation', 'firstName', 'lastName', 'email', 'phone')) {

			Session::put([
				'salutation' => Input::get('salutation'),
				'firstName'  => Input::get('firstName'),
				'lastName'   => Input::get('lastName'),
				'email'      => Input::get('email'),
				'phone'      => Input::get('phone'),
			]);

			return Redirect::route('step3');

		} else {
			return Redirect::route('step2');
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function step3()
	{
		return view('step3.create');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function step3store()
	{
		return Redirect::route('step4');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function step4()
	{
		// Create data for Modelbinding 
		// Showing already filled out values, when you return to this form.
		if(Session::has('payment-method', 'terms-of-service')) {
			$data = [
				'payment-method'   => Session::get('payment-method'),
				'terms-of-service' => Session::get('terms-of-service'),
			];
		} else {
			$data = [];
		}

		return View::make('step4.create', ['modelData' => $data]);
	}


	/**
	 * Saving Payment Method and Redirecting it to heidelpay
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function step4store()
	{
		if(Input::has('payment-method', 'terms-of-service') &&
			Session::has('householdCount', 'comments', 'city', 'salutation', 'firstName', 'lastName', 'email', 'phone')) {

			Session::put([
				'payment-method'   => Input::get('payment-method'),
				'terms-of-service' => Input::get('terms-of-service'),
			]);

			// Data to be send to Heidelpay 
			$data = [
				'salutation'     => Session::get('salutation'),
				'firstName'      => Session::get('firstName'),
				'lastName'       => Session::get('lastName'),
				'email'          => Session::get('email'),
				'city'           => Session::get('city'),
				'payment-method' => Session::get('payment-method'),
			];


			return View::make('pages.thankyou')
				->with('data', $data);

		} else {
			return Redirect::route('step4');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function step5()
	{
		return View::make('step5.create');
	}

}
