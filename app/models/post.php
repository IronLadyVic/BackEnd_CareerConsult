<?php

class Post extends Eleoquent{
	public function topic(){
		return $this->belongsTo('Topic');
	}

	protected $fillable = array('title','photo_path','content','avatar','editor','date');
}