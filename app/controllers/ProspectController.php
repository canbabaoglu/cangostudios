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
		Mail::send('emails.prospects.adminnotify', $input, function($message)
		{
			$message->to('babaoglu.can@gmail.com')->subject('CangoStudios Prospect');
		});

		// email to prospect
		
		Mail::send('emails.prospects.confirm', $input, function($message) use ($input)
		{
			$message->to($input['email'])->subject('Thank you for contacting CangoStudios!');
		});
		
		
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