<?php
$username = 'norvin';
$password = '7Norvin';
$p_username=strlen($username);
$p_passwordmin=strlen($password) >4;
$p_passwordmax=strlen($password) >11;


if(preg_match("/[a-zA-Z]$/", $username) && $p_username <=6) {
  if(preg_match("/^7*(?=\S)(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$$/", $password) || $p_passwordmin || $p_passwordmax ){
      echo'Username $username valid boy, Password $password juga valid';
  }
  else{
     echo'Username $username valid boy, Password $password Tidak valid'; 
  }
} else {
  echo 'Tidak Valid';
}
?>
