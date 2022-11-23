<?php 
class controler{
    // ham goi cac  model 
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }
    // ham goi cac view 
    public function view($view , $data=[] ){
        require_once "./mvc/views/".$view.".php";
       
    }
 
}
?>