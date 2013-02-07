<?php
class Admin_controller{

  function __construct()
  {
     
  }
  
  function dashboard(){
    F3::set('location',Admin::instance()->getAllLocations());
    echo Views::instance()->render('admin/travels.html');
  }
  
}
?>