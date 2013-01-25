<?php
class App_controller{
 
 function __construct(){
  
 }
 
 function home(){
    #récupération de la destination courante
    $App=new App();
    $location=$App->locationDetails();
    F3::set('location',$location);
    
    
    
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