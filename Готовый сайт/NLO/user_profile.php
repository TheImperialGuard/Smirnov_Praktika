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
    <link rel="stylesheet" href="assets/css/Canito-Ingresar-Producto.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Forum---Thread-listing-1.css">
    <link rel="stylesheet" href="assets/css/Forum---Thread-listing.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<?php 
    require "includes/db.php";
    require "includes/session.php";
?>

<body style="background-image: url('assets/img/123.jpg');background-attachment: fixed;background-size: cover;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><img style="width: 65px;height: 65px;margin-left: -77px;" src="assets/img/kisspng-unidentified-flying-object-desktop-wallpaper-compu-5b2e7392a14c08.6459674515297708986607.png"><a class="navbar-brand" href="./main.php" style="color: #5d3193;margin-left: 13px;">НЛО</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="fav_items.php">Избранное</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="product_new_category.php">Выставить товар</a></li>
                    
                </ul>
                <div class="form-group" style="margin-left: 5px;margin-bottom: -3px;margin-right: 196px;width: auto;"><label for="search-field"></label></div><span class="navbar-text actions"> <a class="login" href="includes/logout.php">Выход</a></span></div><img style="width: 65px;color: #5d3193;height: 65px;" src="assets/img/img_profile.png"></div>
    </nav>
    <?php
    if(!isset($_SESSION['profile_edit'])){
        echo '
    <div class="row" style="margin-top: 95px;margin-right: 390px;margin-left: 390px;background-color: rgb(255,255,255);">
        <div class="col" style="max-width: 30%;margin-left: 12px;">
            <div class="row" style="height: 332px;max-height: 332px;margin-top: 104px;">
                <div class="col" style="min-width: none;min-height: auto;height: 83px;max-width: 65px;"><a href="fav_items.php"><img style="width: 40px;height: 40px;" src="assets/img/izbr.png"></a></div>
                <div class="col" style="min-width: 70%;min-height: auto;height: 83px;padding-left: 0px;">
                    <a style="color: #000 !important; text-decoration: none" href="fav_items.php"><h4 style="margin-top: 0px;">Избранное</h4></a>
                    <p class="text-secondary">Товары, которые вы отметили</p>
                </div>
                <div class="col" style="min-width: none;min-height: auto;height: 83px;max-width: 65px;"><a href="user_items.php"><img style="width: 40px;height: 40px;" src="assets/img/tovari.png"></a></div>
                <div class="col" style="min-width: 70%;min-height: auto;height: 83px;padding-left: 0px;">
                    <a style="color: #000 !important; text-decoration: none" href="user_items.php"><h4 style="margin-top: 0px;">Мои объявления</h4></a>
                    <p class="text-secondary">Выставленные вами товары</p>
                </div>
                <div class="col" style="min-width: none;min-height: auto;height: 83px;max-width: 65px;"><a href="product_new_category.php"><img style="width: 40px;height: 40px;" src="assets/img/sozd.png"></a></div>
                <div class="col" style="min-width: 70%;min-height: auto;height: 83px;padding-left: 0px;">
                    <a style="color: #000 !important; text-decoration: none" href="product_new_category.php"><h4 style="margin-top: 0px;">Новое объявление</h4></a>
                    <p class="text-secondary">Выставите товар на продажу</p>
                </div>
                <div class="col" style="min-width: none;min-height: auto;height: 83px;max-width: 65px;"><img style="width: 40px;height: 40px;" src="assets/img/help.png"></div>
                <div class="col" style="min-width: 70%;min-height: auto;height: 83px;padding-left: 0px;">
                    <h4 style="margin-top: 0px;">Помощь</h4>
                    <p class="text-secondary">Поможем решить вашу проблему</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col" style="min-width: 100%;">
                    <h1 style="margin-top: 90px;margin-left: 20px;">Личный кабинет</h1>
                </div>
                <div class="col">
                    <hr>
                </div>
                <div class="col" style="min-width: 100%;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-left: 20px;">Имя</p>
                            <p style="Text-decoration: underline;Text-decoration-color: rgb(92,48,147);margin-top: -10px;margin-left: 20px;">'.$_SESSION['logged_user']['user_name'].'</p>
                        </div>
                        <div class="col">
                            <p>Фамилия</p>
                            <p style="Text-decoration: underline;Text-decoration-color: rgb(92,48,147);margin-top: -10px;">'.$_SESSION['logged_user']['user_surname'].'</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="min-width: 100%;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-left: 20px;">Город</p>
                            <p style="Text-decoration: underline;Text-decoration-color: rgb(92,48,147);margin-top: -10px;margin-left: 20px;">';
                            if(isset($_SESSION['logged_user']['user_city'])){
                                echo $_SESSION['logged_user']['user_city'];
                            }else{
                                echo 'Город не выбран';
                            }
                            echo '</p>
                        </div>
                        <div class="col">
                            <p>Номер телефона</p>
                            <p style="Text-decoration: underline;Text-decoration-color: rgb(92,48,147);margin-top: -10px;">';
                            if(isset($_SESSION['logged_user']['user_phone'])){
                                echo $_SESSION['logged_user']['user_phone'];
                            }else{
                                echo 'Номер телефона не указан';
                            }
                            echo '</p>
                        </div>
                    </div>
                </div>
                <div class="col" style="min-width: 100%;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-left: 20px;">Электронная почта</p>
                            <p style="Text-decoration: underline;Text-decoration-color: rgb(92,48,147);margin-top: -10px;margin-left: 20px;">'.$_SESSION['logged_user']['user_email'].'</p>
                        </div>
                        <div class="col"><form action="includes/profile_cfg.php" method="post"><button class="btn btn-light" type="submit" name="profile_edit" style="background: #5d3193;color: white;margin-top: 19px;">Редактировать данные</button></form>';
                        if($_SESSION['logged_user']['user_status'] == 2){
                        echo '<a href="admin_panel.php"><button class="btn btn-light" type="button" style="background: #5d3193;color: white;margin-top: 14px;">Панель администратора</button></a>';
                        }
                        echo '
                        </div>
                    </div>
                </div>
                <div class="col">
                    <hr style="margin-bottom: 90px;">
                </div>
            </div>
        </div>
    </div>
    ';
    }else{
        echo '
    <div class="row" style="margin-top: 95px;margin-right: 390px;margin-left: 390px;background-color: rgb(255,255,255);">
        <div class="col">
            <div class="row">
                <div class="col" style="min-width: 100%;">
                    <h1 style="margin-top: 90px;margin-left: 20px;">Изменение данных пользователя</h1>
                    ';
                    if(isset($_SESSION['profile_edit_errors'])){
                        echo '<div style="color: red;">'.array_shift($_SESSION['profile_edit_errors']).'</div>';
                        unset($_SESSION['profile_edit_errors']);
                    }
                    echo '
                </div>
                <div class="col">
                    <hr>
                    <form action="includes/profile_cfg.php" method="post">
                </div>
                <div class="col" style="min-width: 100%;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-left: 20px;margin-bottom: 4px;">Имя</p><input maxlength="20" name="user_name" value="'.$_SESSION['logged_user']['user_name'].'" type="text" style="width: 253px;margin-left: 19px;margin-bottom: 16px;"></div>
                        <div class="col">
                            <p style="margin-bottom: 4px;">Фамилия</p><input maxlength="20" name="user_surname" value="'.$_SESSION['logged_user']['user_surname'].'" type="text" style="width: 253px;margin-left: 0px;margin-bottom: 16px;"></div>
                    </div>
                </div>
                <div class="col" style="min-width: 100%;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-left: 20px;margin-bottom: 4px;">Город</p>
                                <select name="user_city" style="margin-left: 18px;">
                                    <option disabled selected>Город не выбран</option>
                                    <option value="Москва">Москва</option>
                                    <option value="Санкт-Петербург">Санкт-Петербург</option>
                                    <option value="Новгород">Новгород</option>
                                    <option value="Анапа">Анапа</option>
                                    <option value="Белгород">Белгород</option>
                                    <option value="Вологда">Вологда</option>
                                    <option value="Воронеж">Воронеж</option>
                                    <option value="Грозный">Грозный</option>
                                    <option value="Казань">Казань</option>
                                    <option value="Красноярск">Красноярск</option>
                                    <option value="Пермь">Пермь</option>
                                </select>
                        </div>
                        <div
                            class="col">
                            <p style="margin-bottom: 4px;">Номер телефона</p><input '; if(isset($_SESSION['logged_user']['user_phone'])){echo 'value="'.$_SESSION['logged_user']['user_phone'].'"';} echo ' name="user_phone" placeholder="+7(xxx)-xxx-xx-xx" type="tel" style="width: 253px;margin-left: 0px;margin-bottom: 16px;"></div>
                </div>
            </div>
            <div class="col" style="min-width: 100%;">
                <div class="row">
                    <div class="col">
                        <p style="margin-left: 20px;margin-bottom: 4px;">Старый пароль</p><input maxlength="20" minlength="8" name="user_password" type="password" style="width: 253px;margin-left: 19px;margin-bottom: 16px;"></div>
                    <div class="col">
                        <p style="margin-bottom: 4px;">Новый пароль</p><input maxlength="20" minlength="8" name="new_user_password" type="password" style="width: 253px;margin-left: 0px;margin-bottom: 16px;"></div>
                </div>
            </div>
            <div class="col"><button class="btn btn-light" type="submit" name="profile_edit_end" style="background: #5d3193;color: white;margin-top: 19px;margin-left: 17px;">Подтвердить</button></form><form id="profile_edit_stop" action="includes/profile_cfg.php" method="post" style="display: none"></form><button form="profile_edit_stop" name="profile_edit_stop" class="btn btn-light" type="submit" style="background: #5d3193;color: white;margin-top: 19px;margin-left: 1px;">Отмена</button>
                <hr
                    style="margin-bottom: 90px;">
            </div>
        </div>
    </div>
    </div>
    ';
    }
    ?>
    <footer id="myFooter" style="padding: 0px;margin-top: 128px;">
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
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>