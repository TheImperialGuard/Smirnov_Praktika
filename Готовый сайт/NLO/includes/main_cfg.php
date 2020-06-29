<?php
  	require "db.php";
    require "session.php";

if(isset($_GET['do_search'])){
  $data = $_GET;
  $search_get = $data['search'];
  $_SESSION['writed'] = $data['search'];
  if(isset($data['category'])){
    $fil_get = $data['category'];
    $find = R::find('items', 'item_name LIKE :item AND item_category = :item2', array(':item' => '%' . $search_get . '%', ':item2' => $fil_get));
    $_SESSION['search'] = $find;
    $_SESSION['category'] = $data['category'];
    header('Location: ../main.php');
  }else{
    $find = R::find('items', 'item_name LIKE :item', array(':item' => '%' . $search_get . '%'));
    $_SESSION['search'] = $find;
    header('Location: ../main.php');
  }
}

if(isset($_GET['do_filter'])){
  $fil_2_get = $_GET['podcategory'];
  $search_get = $_SESSION['writed'];
  $fil_get = $_SESSION['category'];
  $find = R::find('items', 'item_name LIKE :item AND item_category = :item2 AND item_podcategory = :item3', array(':item' => '%' . $search_get . '%', ':item2' => $fil_get, ':item3' => $fil_2_get));
  $_SESSION['search'] = $find;
  header('Location: ../main.php');
}

if(isset($_GET['stop_search'])){
  unset($_SESSION['search']);
  unset($_SESSION['category']);
  unset($_SESSION['writed']);
  header('Location: ../main.php');
}