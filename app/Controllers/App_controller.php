<?php
class App_controller{
 
 function __construct(){
  
 }
 
 function home(){
    #récupération de la destination courante
    $App=new App();
    $location=$App->locationDetails();
    F3::set('location',$location);
    
    $pictures=$App->locationPictures($location->id);
<<<<<<< HEAD
    $json=Views::instance()->toJson($pictures,array('image'=>'src'));
    F3::set('pictures',$json);
=======
    
    
>>>>>>> 7cc245f16dd170d48cf79001043f83a76630d1a1
    //F3::set('location',App::instance()->locationDetails(););
    
    echo Views::instance()->render('travelr.html');
 }
 
 
  function doc(){
    echo Views::instance()->render('userref.html');
  }
 
 function __destruct(){

 } 
}
?>