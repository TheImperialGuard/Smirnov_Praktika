<?php 
	require "db.php";

	$data = $_POST;
	if( isset($data['do_signup']) )
	{

	
		$errors = array();
		if( trim($data['user_name']) == '' )
		{
			$errors[] = 'Введите имя';
		}

		if( trim($data['user_surname']) == '' )
		{
			$errors[] = 'Введите фамилию';
		}

		if( trim($data['user_email']) == '' )
		{
			$errors[] = 'Введите адрес электронной почты';
		}

		if( ($data['user_password']) == '' )
		{
			$errors[] = 'Введите пароль';
		}

		if( ($data['user_password2']) !=$data['user_password'] )
		{
			$errors[] = 'Повторный пароль неверный';
		}

		if( R::count('users', "user_email = ?", array($data['user_email'])) > 0 )
		{
			$errors[] = 'На данный адрес электронной почты уже зарегистрирован аккаунт';
		}

		if( !isset($data['accept']) )
		{
			$errors[] = 'Вы не подтвердили согласие с условиями пользовательского соглашения';
		}

		if( empty($errors) )
		{
			$user = R::dispense('users');
			$user->user_name = $data['user_name'];
			$user->user_surname = $data['user_surname'];
			$user->user_email = $data['user_email'];
			$user->user_status = '1';
			$user->user_password = password_hash($data['user_password'], PASSWORD_DEFAULT);
			R::store($user);
			$_SESSION['logged_user'] = $user;
			header('Location: ./main.php');
		} else
		{
			echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
		}


	}
?>
