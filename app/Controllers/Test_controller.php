<?php
class Test_controller{

  function __construct()
  {
    
  }
  
  function travel(){
    $units=array(
      array('firstname'=>'pumir','lastname'=>'francois','email'=>'pumir@hetic.net','email_check'=>'pumir@hetic.net'),
      array('firstname'=>'','lastname'=>'francois','email'=>'pumir@hetic.net','email_check'=>'pumir@hetic.net'),
      array('firstname'=>'pumir','lastname'=>'','email'=>'pumir@hetic.net','email_check'=>'pumir@hetic.net'),
      array('firstname'=>'','lastname'=>'','email'=>'pumir@hetic.net','email_check'=>'pumir@hetic.net'),
      array('firstname'=>'pumir','lastname'=>'francois','email'=>'pumir@heticnet','email_check'=>'pumir@heticnet'),
      array('firstname'=>'pumir','lastname'=>'francois','email'=>'pumir@hetic.ne','email_check'=>'pumir@hetic.net'),
      array('firstname'=>'pumir','lastname'=>'francois','email'=>'','email_check'=>'pumir@hetic.net'),
      array('firstname'=>'pumir','lastname'=>'francois','email'=>'pumir@hetic.net','email_check'=>''),
      array('firstname'=>'','lastname'=>'francois','email'=>'pumir@hetic.net','email_check'=>'pumir.net')
    );
    foreach ($units as $unit) {
      F3::mock('POST /travel',$unit);
      if(F3::get('errorMsg')){
        echo F3::stringify($unit).' => '.F3::stringify(F3::get('errorMsg')).'<br/>';
      }
      else{
        echo F3::stringify($unit).' => passed<br/>';
      }
    }
  }
  
  
  
}
?>