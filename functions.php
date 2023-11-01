<?php

function number_generator($number){
  // controllo che il mio numero sia maggiore di otto e minore di 32
  if($number > 8 && $number <= 32){
    $result = true;
  }else{
    $result = false;
  }
  return $result;
}


function randomPassword($length_pass){
  $alpha_number_bet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
  $password = [];
  $alphaLength = strlen($alpha_number_bet) - 1;

  for ($i = 0; $i < $length_pass; $i++) {
      $n = rand(0, $alphaLength);
      $password[] = $alpha_number_bet[$n];
  }
  return implode($password); 
  
}
?>