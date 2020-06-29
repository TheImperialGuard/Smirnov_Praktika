<?php
  	require "db.php";
    require "session.php";

    if(isset($_POST['new_category'])){
      $data = $_POST;
      $errors = array();
      if($data['category'] == '' ){
        $errors[] = 'Вы не ввели название категории';
      }
      if( empty($errors) ){
        $category = R::dispense('category');
        $category->category_name = $data['category'];
        R::store($category);
      }else{
        $_SESSION['category_errors'] = $errors;
      }
      header('Location: ../category_admin_panel.php');
    }

    if(isset($_GET['categoryID_for_delete'])){
      $data = $_GET;
      $errors = array();
      $categoryID = $_GET['categoryID_for_delete'];
      $category = R::load('category', $categoryID);
      $podcategory = R::findOne('podcategory', 'parent = ?', array($data['categoryID_for_delete']));
      if($podcategory){
        $errors[] = 'Сначала удалите все подкатегории в данной категории';  
      }
      if( empty($errors) ){
        R::trash($category);
      }else{
        $_SESSION['category_errors'] = $errors;
      }
      header('Location: ../category_admin_panel.php');
    }

    if(isset($_POST['category_change_accept'])){
      $data = $_POST;
      $errors = array();
      $categoryID = $data['categoryID'];
      if($data['category_name'] == '' ){
        $errors[] = 'Вы не ввели название категории';
      }
      if( empty($errors) ){
        $category = R::load('category', $categoryID);
        $category->category_name = $data['category_name'];
        R::store($category);
      }else{
        $_SESSION['category_change_errors'] = $errors;
      }
        header('Location: ../podcategory_admin_panel.php');
    }

    if(isset($_POST['new_podcategory'])){
      $data = $_POST;
      $errors = array();
      if($data['podcategory'] == '' ){
        $errors[] = 'Вы не ввели название подкатегории';
      }
      if( empty($errors) ){
        $podcategory = R::dispense('podcategory');
        $podcategory->podcategory_name = $data['podcategory'];
        $podcategory->parent = $data['parent'];
        R::store($podcategory);
      }else{
        $_SESSION['podcategory_errors'] = $errors;
      }
      header('Location: ../podcategory_admin_panel.php');
    }

    if(isset($_GET['podcategoryID_for_delete'])){
      $podcategoryID = $_GET['podcategoryID_for_delete'];
      $podcategory = R::load('podcategory', $podcategoryID);
      R::trash($podcategory);
      header('Location: ../podcategory_admin_panel.php');
    }

    if(isset($_POST['podcategory_change_accept'])){
      $data = $_POST;
      $errors = array();
      $podcategoryID = $data['podcategoryID'];
      if($data['podcategory_name'] == '' ){
        $errors[] = 'Вы не ввели название подкатегории';
      }
      if( empty($errors) ){
        $podcategory = R::load('podcategory', $podcategoryID);
        $podcategory->podcategory_name = $data['podcategory_name'];
        R::store($podcategory);
      }else{
        $_SESSION['podcategory_change_errors'] = $errors;
      }
        header('Location: ../podcategory_edit.php');
    }