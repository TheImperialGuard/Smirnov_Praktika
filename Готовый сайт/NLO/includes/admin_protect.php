<?php


$user_status = $_SESSION['logged_user']['user_status'];

if($user_status != 2){
  unset($_SESSION['logged_user']);
  header('Location: ../main.php');
}
