<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Сайт</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="assets/css/Bold-BS4-Footer-Simple.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<?php
    require "includes/signup.php";
?>

<body style="background-image: url('assets/img/123.jpg');background-attachment: fixed;background-size: cover;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><img style="width: 65px;height: 65px;margin-left: -77px;" src="assets/img/kisspng-unidentified-flying-object-desktop-wallpaper-compu-5b2e7392a14c08.6459674515297708986607.png"><a class="navbar-brand" href="./main.php" style="color: #5d3193;margin-left: 13px;">НЛО</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto"></ul>
                <div class="form-group" style="margin-left: 5px;margin-bottom: -3px;margin-right: 196px;width: auto;"><label for="search-field"></label></div><span class="navbar-text actions"> <a class="login" href="./autorisation.php">Вход</a><a class="btn btn-light action-button" role="button" href="./registration.php" style="background: #5d3193;">Регистрация</a></span></div>
        </div>
    </nav>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" style="margin-top: 90px;width: 883px;margin-left: 191px;" method="post">
                <h1 style="border-bottom: 2px solid rgb(93,49,147);">Создание аккаунта</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Имя</label></div>
                    <div class="col-sm-6 input-column"><input maxlength="20" class="form-control" type="text" name="user_name" value="<?php echo @$data['user_name']; ?>" style="width: 253px;"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Фамилия</label></div>
                    <div class="col-sm-6 input-column"><input maxlength="20" class="form-control" type="text" name="user_surname" value="<?php echo @$data['user_surname']; ?>" style="width: 253px;"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Электронная почта</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="user_email" value="<?php echo @$data['user_email']; ?>" style="width: 253px;"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Пароль</label></div>
                    <div class="col-sm-6 input-column"><input minlength="8" maxlength="20" class="form-control" type="password" name="user_password" value="<?php echo @$data['user_password']; ?>" style="width: 253px;"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Повторите пароль</label></div>
                    <div class="col-sm-6 input-column"><input minlength="8" maxlength="20" class="form-control" type="password" name="user_password2" value="<?php echo @$data['user_password2']; ?>" style="width: 253px;"></div>
                </div>
                <div class="form-check"><input class="form-check-input" type="checkbox" name="accept" id="formCheck-1" style="margin-top: 2px;"><label class="form-check-label" for="formCheck-1">Я прочитал и согласен с условиями пользовательского соглашения</label></div><button class="btn btn-light submit-button"
                    type="submit" name="do_signup" style="background: #5d3193;">Зарегистрироваться</button>
                <div class="form-row" style="height: auto;">
                    <div class="col" style="margin-top: -21px;"><a class="text-truncate" href="./autorisation.php">У меня уже есть аккаунт</a></div>
                </div>
            </form>
        </div>
    </div>
    <footer id="myFooter" style="padding:0px;">
        <div class="container-fluid" style="margin-top: -33px;">
            <div class="row text-center">
                <div class="col-12" style="background-color: #ffffff;">
                    <ul class="list-unstyled" style="margin-top: 33px;">
                        <li><a href="#">Помощь</a></li>
                        <li><a href="#">Лицензионное соглашение</a></li>
                        <li><a href="#">Реклама на НЛО</a></li>
                        <li></li>
                    </ul>
                    <p class="footer-copyright">© 2020 "ДРОНСТАЙЛ"</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
</body>

</html>