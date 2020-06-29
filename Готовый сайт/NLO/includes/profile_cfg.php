<?php
  	require "db.php";
    require "session.php";

    if(isset($_POST['profile_edit'])){
      $_SESSION['profile_edit'] = 1;
      header('Location: ../user_profile.php');
    }

    if(isset($_POST['profile_edit_stop'])){
      unset($_SESSION['profile_edit']);
      header('Location: ../user_profile.php');
    }

    if(isset($_POST['profile_edit_end'])){

      $userr = array();

      $userr = $_SESSION['logged_user']; 
      
      $user = R::findOne('users', 'user_email = ?', array($userr['user_email']));

      $data = $_POST;

      $errors = array();

		  if( trim($data['user_name']) == '' )
		  {
			  $errors[] = 'Введите имя';
		  }

		  if( trim($data['user_surname']) == '' )
		  {
			  $errors[] = 'Введите фамилию';
      }

      if( ($data['user_password']) != '' ){
        if(($data['new_user_password']) != ''){
          if( password_verify($data['user_password'], $user->user_password)){
            $data['user_password'] = $data['new_user_password'];
          }else{
            $errors[] = 'Неверный пароль';
          }
        }else{
          $errors[] = 'Введите новый пароль';
        }
      }

      if( empty($errors) ){
			  $user->user_name = $data['user_name'];
        $user->user_surname = $data['user_surname'];
        $user->user_city = $data['user_city'];
        if(($data['user_phone']) != ''){
          $user->user_phone = $data['user_phone'];
        }
        if(($data['user_password']) != ''){
          $user->user_password = password_hash($data['user_password'], PASSWORD_DEFAULT);
        }
        R::store($user);
        $_SESSION['logged_user'] = $user;
        unset($_SESSION['profile_edit']);
        if(isset($_SESSION['profile_edit_errors'])){
          unset($_SESSION['profile_edit_errors']);
        }
      }else{
        $_SESSION['profile_edit_errors'] = $errors;
      }
        header('Location: ../user_profile.php');
    }
