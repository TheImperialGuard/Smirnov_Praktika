<?php 
	require "db.php";
	require "session.php";

	$data = $_POST;
	if( isset($data['do_login']) )
	{
		$errors = array();
		$user = R::findOne('users', 'user_email = ?', array($data['user_email']));

		if( $user)
		{
		
			if( password_verify($data['user_password'], $user->user_password))
			{
				$_SESSION['logged_user'] = $user;
				header('Location: ./main.php');
				echo '<div style="color: green;">Logged in!</div><hr>';
			} else 
			{
				$errors[] = 'Неверный пароль';
			}
		} else
		{
			$errors[] = 'Пользователь с таким адресом электронной почты не найден';
		}

		if( ! empty($errors) )
		{
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		} 
	}
?>

