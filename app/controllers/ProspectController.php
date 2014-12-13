<?php

use Cangostudios\Forms\ContactForm;

class ProspectController extends \BaseController {

	
	public function store()
	{
		// Setup
		$input = Input::all();
		$rules = Prospect::getRules();
		$response = ['type' => 'success'];

		// Validate input
		$validation = Validator::make($input, $rules);

		// 
		if ($validation->fails()) 
		{
			$response = [
				'type'    => 'error',
				'errors'  => $validation->messages()->toArray()
			];
			return Response::json($response);
		}
		
		//Write to db
		$prospect = Prospect::create($input);
		
		// email to Can

		// email to prospect
		
		return Response::json($response);	

	}

	public function index()
	{
		//
	}

	public function create()
	{
		//
	}

	// Original Location of Store

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		//
	}

	public function update($id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}

}