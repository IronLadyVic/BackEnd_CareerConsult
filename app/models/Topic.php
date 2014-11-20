<?php
	
	class Topic extends Eloquent{
		public function posts(){
			return $this->hasMany('Post');
		}

		protected $fillable = array('name');
	}


