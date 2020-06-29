<?php
	require "db.php";
	require "session.php";
	$data = $_GET;
	if( isset($data['user_email']) )
	{
		$errors = array();
		$user = R::findOne('users', 'user_email = ?', array($data['user_email']));

		if($user)
		{
		    $_SESSION['user_name'] = $user['user_name'];
		    $_SESSION['user_surname'] = $user['user_surname'];
		    $_SESSION['user_email'] = $user['user_email'];
		    $_SESSION['user_id'] = $user['id'];
		    $_SESSION['user_status'] = $user['user_status'];
		} else
		{
			$errors[] = 'Пользователь с таким адресом электронной почты не найден';
		}

		if( ! empty($errors) )
		{
			//echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
			$_SESSION['errors'] = $errors;
		}
	}
    header('Location: ../users_admin_panel.php');
?>

