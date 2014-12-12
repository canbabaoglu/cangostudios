<?php

class ProspectController extends \BaseController {

	public function store()
	{
		$prospect = Prospect::create(Input::all());
		
		$response = [
			'type'       => 'success',
			'input'      => Input::all()
		];

		return json_encode($response);
		// validate input

		// write to db

		// email to Can

		// email to prospect

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