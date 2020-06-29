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
    if(isset($_GET['itemID'])){
        $itemID = $_GET['itemID'];
        $_SESSION['itemID'] = $itemID;
    }else{
        $itemID = $_SESSION['itemID'];
    }
    $item = R::load('items', $itemID);
    $categoryID = $item['item_category'];
    $category = R::load('category', $categoryID);
    $podcategoryID = $item['item_podcategory'];
    $podcategory = R::load('podcategory', $podcategoryID);
    $item_userID = $item['item_user'];
    $item_user = R::load('users', $item_userID);
?>

<body style="background-image: url('assets/img/123.jpg');background-attachment: fixed;background-size: cover;">
<nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><img style="width: 65px;height: 65px;margin-left: -77px;" src="assets/img/kisspng-unidentified-flying-object-desktop-wallpaper-compu-5b2e7392a14c08.6459674515297708986607.png"><a class="navbar-brand" href="./main.php" style="color: #5d3193;margin-left: 13px;">НЛО</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                  <?php
                    if(isset($_SESSION['logged_user'])){
                 echo   '<li class="nav-item" role="presentation"><a class="nav-link" href="fav_items.php">Избранное</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="product_new_category.php">Выставить товар</a></li>';
                    } ?>
                    
                </ul>
                
                <div class="form-group" style="margin-left: 5px;margin-bottom: -3px;margin-right: 196px;width: auto;"><label for="search-field"></label></div><span class="navbar-text actions"> 

                <?php
                if(isset($_SESSION['logged_user'])){   
                    echo '<a class="login" href="includes/logout.php">Выход</a></span></div><a href="user_profile.php"><img style="width: 65px;color: #5d3193;height: 65px;" src="assets/img/img_profile.png"></a></span></div>';
                }else{
                    echo '<a class="login" href="./autorisation.php">Вход</a><a class="btn btn-light action-button" role="button" href="./registration.php" style="background: #5d3193;">Регистрация</a></span></div>';
                }
                ?>

        </div>
    </nav>
    <?php
    echo'
    <div class="container" style="background-color: white;margin-top: 60px;">
        <div class="row" style="height: 72px;">
            <div class="col" style="margin-top: -14px;">
                <h1 class="my-4" style="width: 730px;margin-top: 14px;margin-bottom: 20px;">'.$item['item_name'].'<br></h1>
            </div>
            <div class="col" style="margin-top: -14px;">
                <h1 class="my-4" style="width: 280px;height: 50px;margin: 11px;margin-top: 0px;margin-bottom: 0px;padding: 0px;padding-bottom: 0px;">'.$item['item_cost'].' ₽</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8"><img class="img-fluid" src="includes/product_images/'.$item['item_image'].'" alt="Alt Text"></div>
            <div class="col-md-4">';
            
            $logged_user = $_SESSION['logged_user'];
            $fav = R::findOne( 'fav', ' fav_user = ? AND fav_item = ? ', array($logged_user['id'], $itemID));
            
            if($fav){
                echo '<form action="includes/product_cfg.php" method="post" style="display: none" id="fav_off"><input type="text" value="'.$itemID.'" name="fav"></form><button name="fav_delete" class="btn btn-primary" form="fav_off" type="submit" style="width: 202px;margin-top: 14px;margin-bottom: 15px;background-color: #5d3193;border-color: #5d3193;margin-right: 0px;margin-left: -1px;">Удалить из избранного</button>';
            }else{
                echo '<form action="includes/product_cfg.php" method="post" style="display: none" id="fav_on"><input type="text" value="'.$itemID.'" name="fav"></form><button name="fav_add" class="btn btn-primary" form="fav_on" type="submit" style="width: 202px;margin-top: 14px;margin-bottom: 15px;background-color: #5d3193;border-color: #5d3193;margin-right: 0px;margin-left: -1px;">Добавить в избранное</button>';
            }

               echo ' <div class="row" style="height: 76px;">
                    <div class="col" style="width: 62px;height: 74px;max-width: 140px;">
                        <p style="margin-top: 24px;"></p>
                        <p style="height: 32px;width: 160px;color: gray;">Категория</p>
                    </div>
                    <div class="col" style="height: 74px;">
                        <p style="margin-top: 25px;height: 32px;width: 160px;">'.$category['category_name'].'</p>
                    </div>
                </div>
                <div class="row" style="height: 76px;">
                    <div class="col" style="width: 62px;height: 74px;max-width: 140px;">
                        <p style="margin-top: 24px;"></p>
                        <p style="height: 32px;width: 160px;color: gray;">Подкатегория</p>
                    </div>
                    <div class="col" style="height: 74px;">
                        <p style="margin-top: 25px;height: 32px;width: 160px;">'.$podcategory['podcategory_name'].'</p>
                    </div>
                </div>
                <div class="row" style="height: 192px;">
                    <div class="col" style="height: auto;min-width: 100%; margin-top: 45px;">
                        <h5>Информация о продавце</h5>
                        <p class="lead text-monospace" style="margin-top: 12px;width: auto;Text-decoration: underline;Text-decoration-color: rgb(92,48,147);">'.$item_user['user_name'].' '.$item_user['user_surname'].'</p>
                        <p class="lead text-monospace" style="margin-top: -9px;width: auto;Text-decoration: underline;Text-decoration-color: rgb(92,48,147);">'.$item_user['user_city'].'</p>
                        <p class="lead text-monospace" style="margin-top: -5px;width: auto;Text-decoration: underline;Text-decoration-color: rgb(92,48,147);">'.$item_user['user_phone'].'</p>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="my-4">Описание товара<br></h3>
        <div class="row" style="max-height: auto;">
            <div class="col">
                <p style="max-height: auto;width: 730px;overflow-x: hidden;">'.$item['item_text'].'<br></p>
            </div>
            <div class="col-md-12 content-right">';
            global $g;
            $g = 1;
            if(isset($_SESSION['logged_user'])){
                if(($_SESSION['logged_user']['user_status']) == 2 ){
                    global $g;
                    echo '<form id="delete" action="includes/product_cfg.php" method="post" style="display: none"><input type="text" name="itemID" value="'.$itemID.'"></form><button form="delete" name="delete_accept" class="btn btn-primary form-btn" type="submit" style="background-color: #5d3193;border-color: #5d3193;margin-bottom: 5px;">Удалить объявление</button>';
                    $g = 2;
                }elseif(($_SESSION['logged_user']['id']) == $item_user['id']){
                    global $g;
                    if($g != 2){
                        echo '<form id="delete" action="includes/product_cfg.php" method="post" style="display: none"><input type="text" name="itemID" value="'.$itemID.'"></form><button form="delete" name="delete_accept" class="btn btn-primary form-btn" type="submit" style="background-color: #5d3193;border-color: #5d3193;margin-bottom: 5px;">Удалить объявление</button>';
                    }
                }
            }
            

            
            if(isset($_SESSION['logged_user'])){
                if(($_SESSION['logged_user']['user_status']) == 2){
                    echo '<h5 style="margin-right: 40px;margin-top: 2px;">Электронный адрес автора: '.$item_user['user_email'].'</h5>';
                }
            }    
            echo '
            </div>
        </div>
    </div>
    ';
    ?>
    <footer id="myFooter" style="padding:0px; margin-top: 130px;">
        <div class="container-fluid">
            <div class="row text-center" style="margin-top: -59px;">
                <div class="col-12" style="background-color: #ffffff;">
                    <ul class="list-unstyled" style="margin-top: 33px;">
                        <li><a href="#">Помощь</a></li>
                        <li><a href="#">Лицензионное соглашение</a></li>
                        <li><a href="#">Реклама на НЛО</a></li>
                        <li></li>
                    </ul>
                    <p class="footer-copyright">© 2020 ООО "ДРОНСТАЙЛ"&nbsp;</p>
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