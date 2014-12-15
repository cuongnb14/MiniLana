<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
    
	protected function getCategories(){
	    $categories = ClassCategory::all();
	    $categories = $categories->all();
	    foreach ($categories as $category){
	        $category->sub = Category::where('class_id','=',$category->id)->get()->all();
	    }
	    return $categories;
	}
	
	protected function cutString($str, $lenght){
	     $str = trim($str);
	     if (strlen($str) <= $lenght) return $str; 
	     $str = substr($str, 0, $lenght);
	     $last = strripos($str, " ");
	     $str = substr($str, 0, $last);
	    return $str;
	}
}
