<?php
class Food extends Eloquent{
	protected $table = 'pre_foods';
	
	public function categories(){
	    return $this->belongsToMany('Category', 'foods_categories');
	}
	
	public static function getUrlImage($id){
	    return asset('public/assets/datastore/images_food/f-'.$id.'.jpg');
	}
}