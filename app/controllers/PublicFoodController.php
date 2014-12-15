<?php 
class PublicFoodController extends BaseController {
    
	public function getDetail($id=null,$name=null){
	    $data['food'] = Food::find($id);
	    $data['food']->steps = explode("||",$data['food']->steps);
	    return View::make("public.food.detail",$data);
	}
	
	public function getList($idCategory=1){
	  $data['categories'] = $this->getCategories();
	  if($idCategory!=null){
	      $data['foods'] = Food::whereHas('categories', function($q) use($idCategory){
	          $q->where('category_id', '=', $idCategory);
	      })->get();
	      
	      $data['nameCategory'] = Category::find($idCategory)->name;
	  }
	  
	  $data['foods'] = $data['foods']->all();
	  return View::make("public.food.list",$data);
	}
}
?>