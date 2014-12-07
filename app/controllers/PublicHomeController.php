<?php 
class PublicHomeController extends BaseController {
    
	public function getIndex(){
	    return View::make("public.home.index");
	}
}
?>

