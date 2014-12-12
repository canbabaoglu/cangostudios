<?php

class Prospect extends Eloquent {
	
	protected $table = 'prospects';

	protected $fillable = [
		'name',
		'email',
		'phoneNo',
		'message'
	];

}