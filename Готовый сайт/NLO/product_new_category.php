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
    $category = R::findAll('category');
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
                <div class="form-group" style="margin-left: 5px;margin-bottom: -3px;margin-right: 196px;width: auto;"><label for="search-field"></label></div><span class="navbar-text actions"> <a class="login" href="includes/logout.php">Выход</a></span></div><a href="user_profile.php"><img style="width: 65px;color: #5d3193;height: 65px;" src="assets/img/img_profile.png"></a></div>
    </nav>
    <div class="row" style="margin-top: 165px;margin-right: 390px;margin-left: 390px;background-color: rgb(255,255,255);">
        <div class="col">
            <div class="row">
                <div class="col" style="min-width: 100%;">
                    <h1 style="margin-top: 90px;margin-left: 20px;">Создание объявления</h1>
                    <?php
                    if(($_SESSION['logged_user']['user_city']) == '' or ($_SESSION['logged_user']['user_phone  ']) == ''){
                        echo "Для создания объявления вам нужно полностью заполнить профиль";
                    }
                    if(isset($_SESSION['new_product_category_errors'])){
                        echo '<div style="color: red;">'.array_shift($_SESSION['new_product_category_errors']).'</div>';
                        unset($_SESSION['new_product_category_errors']);
                    }
                    ?>
                </div>
                <div class="col">
                    <hr>
                </div>
                <div class="col" style="min-width: 100%;">
                    <div class="row">
                        <div class="col">
                            <p style="margin-left: 20px;margin-bottom: 4px;">Категория</p>
                            <form id="buttons" action="includes/new_product_cfg.php" method="post">
                            <select name="new_product_category" style="margin-left: 18px;width: 294px;margin-bottom: 16px;">
                                <option disabled selected>Выберите категорию вашего товара</option>
                                <?php
                                foreach($category as $row){
                                    echo '
                                    <option value="'.$row['id'].'">'.$row['category_name'].'</option>
                                    ';
                                }
                                ?>
                            </select></form>
                        </div>
                    </div>
                </div>
                <div class="col"><button form="buttons" name="new_product_category_accept" class="btn btn-light" type="submit" style="background: #5d3193;color: white;margin-top: 19px;margin-left: 17px;">Продолжить</button><button form="buttons" name="new_product_category_stop" class="btn btn-light" type="submit" style="background: #5d3193;color: white;margin-top: 19px;margin-left: 1px;">Отмена</button>
                    <hr
                        style="margin-bottom: 90px;">
                </div>
            </div>
        </div>
    </div>
    <footer id="myFooter" style="padding: 0px;margin-top: 188px;">
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