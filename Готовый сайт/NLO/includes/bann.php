<?php
  	require "db.php";
    require "session.php";
    if(isset($_POST['button'])){
        $button = $_POST['button'];
        $banID = $_SESSION["user_change$button"];
        $user = R::load('users', $banID);
        $user->user_status = "3";
        R::store($user);
        header('Location: ../users_admin_panel.php');
    }else{
    $banID = $_SESSION["user_id"];
    $user = R::load('users', $banID);
    $user->user_status = "3";
    R::store($user);
    $_SESSION['user_status'] = 3;
    header('Location: ../users_admin_panel.php');
    }
?>    