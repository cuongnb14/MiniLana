<?php
class FoodCategories extends Eloquent{
    protected $table = 'foods_categories';

    public function foods(){
        return $this->belongsTo('Food','food_id');
    }
}