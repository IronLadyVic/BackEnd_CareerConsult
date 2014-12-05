<?php

class Post extends Eloquent{
	public function topic(){
		return $this->belongsTo('Topic');
	}

	protected $fillable = array('topic_id','title','photo_path','content','avatar','editor','date');
}