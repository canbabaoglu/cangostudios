<?php

class Prospect extends Eloquent {
	
	protected $table = 'prospects';

	protected $fillable = [
		'name',
		'email',
		'phoneNo',
		'message'
	];

	protected static $rules = [
		'name'     =>  'required',
		'email'    =>  ['required', 'email'],
		'phoneNo'  =>  'required',
		'message'  =>  'required'
	];

	public static function getRules() 
	{
		return static::$rules;
	}



}