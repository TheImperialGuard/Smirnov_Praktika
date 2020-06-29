<?php
  	require "db.php";
    require "session.php";
    if(isset($_POST['button'])){
      $button = $_POST['button'];
      $banID = $_SESSION["user_change$button"];
      $user = R::load('users', $banID);
      $user->user_status = "1";
      R::store($user);
      header('Location: ../users_admin_panel.php');
  }else{
    $razbanID = $_SESSION["user_id"];
    $user = R::load('users', $razbanID);
    $user->user_status = "1";
    R::store($user);
    $_SESSION['user_status'] = 1;
    header('Location: ../users_admin_panel.php');
  }
?>