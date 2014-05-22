<?php

class Tournament extends \Eloquent {
	protected $fillable = [];

	public function matches()
	{
		return $this->belongsToMany('Match');
	}
}