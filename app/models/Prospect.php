<?php

class Prospect extends Eloquent {
	
	protected $table = 'prospects';

	protected $fillable = [
		'name',
		'email',
		'phoneNo',
		'message_body'
	];

	protected static $rules = [
		'name'          =>  'required',
		'email'         =>  ['required', 'email'],
		'phoneNo'       =>  'required',
		'message_body'  =>  'required'
	];

	public static function getRules() 
	{
		return static::$rules;
	}



}