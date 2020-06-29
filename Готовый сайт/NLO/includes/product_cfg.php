<?php
  	require "db.php";
    require "session.php";

    if(isset($_POST['fav_add'])){
      $data = $_POST;
      $logged_user = $_SESSION['logged_user'];
      $fav = R::dispense('fav');
      $fav->fav_user = $logged_user['id'];
      $fav->fav_item = $data['fav'];
      R::store($fav);
      header('Location: ../product.php');
    }

    if(isset($_POST['fav_delete'])){
      $itemID = $_POST['fav'];
      $logged_user = $_SESSION['logged_user'];
      $fav = R::findOne( 'fav', ' fav_user = ? AND fav_item = ? ', [ $logged_user['id'], $itemID]);
      R::trash($fav);
      header('Location: ../product.php');
    }

    if(isset($_POST['delete_accept'])){
      $itemID = $_POST['itemID'];
      $item = R::load('items', $itemID);
      R::trash($item);
      header('Location: ../user_items.php');
    }

    