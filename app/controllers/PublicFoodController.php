<?php 
class PublicFoodController extends BaseController {
    
	public function getDetail(){
	    return View::make("public.food.detail");
	}
}
?>