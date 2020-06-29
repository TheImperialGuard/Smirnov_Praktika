<?php
require "db.php";
require "session.php";

if(isset($_POST['new_product_category_stop'])){
  header('Location: ../main.php');
}

if(isset($_POST['product_new_stop'])){
  unset($_SESSION['new_product_category']);
  header('Location: ../main.php');
}

if(isset($_POST['new_product_category_accept'])){
  $data = $_POST;
  $errors = array();
  if(($data['new_product_category']) == ''){
    $errors[] = 'Вы не выбрали категорию';
  }
  if(empty($errors)){
    $_SESSION['new_product_category'] = $data['new_product_category']; 
    header('Location: ../product_new.php');
  }else{
    $_SESSION['new_product_category_errors'] = $errors;
    header('Location: ../product_new_category.php');
  }
}

if(isset($_POST['product_new_accept'])){
  $data = $_POST;
  $errors = array();
  if(($data['product_name']) == ''){
    $errors[] = 'Введите название товара';
  }
  if(($data['product_podcategory']) == ''){
    $errors[] = 'Вы не выбрали подкатегорию товара';
  }
  if(($data['product_cost']) == ''){
    $errors[] = 'Введите цену товара';
  }
  if(($data['product_text']) == ''){
    $errors[] = 'Введите описание товара';
  }
  if(empty($errors)){
    $destiation_dir = dirname(__FILE__).'/product_images/'.$_FILES['product_image']['name'];
    $product_image = $_FILES['product_image']['name'];
    move_uploaded_file(($_FILES['product_image']['tmp_name']), $destiation_dir);
    $userID = $_SESSION['logged_user']['id'];
    $user_phone = $_SESSION['logged_user']['user_phone'];
    $podcategoryID = $data['product_podcategory'];
    $podcategory = R::load('podcategory', $podcategoryID);
    $parent = $podcategory['parent'];
    $item = R::dispense('items');
    $item->item_name = $data['product_name'];
    $item->item_cost = $data['product_cost'];
    $item->item_category = $parent;
    $item->item_podcategory = $data['product_podcategory'];
    $item->item_text = $data['product_text'];
    $item->item_user = $userID;
    $item->item_user_phone = $user_phone;
    $item->item_image = $product_image;
    R::store($item);
    header('Location: ../user_items.php');
  }else{
    $_SESSION['product_new_errors'] = $errors;
    header('Location: ../product_new.php');
  }
}
