<?php 
class PublicHomeController extends BaseController {
    
	public function getIndex(){
	    $data['categories'] = $this->getCategories();
	    return View::make("public.home.index",$data);
	}
}
?>

