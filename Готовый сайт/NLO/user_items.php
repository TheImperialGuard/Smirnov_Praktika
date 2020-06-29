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
    $item_user = $_SESSION['logged_user']['id'];
    $items = R::FindAll('items');
    $items_group = array();
    foreach($items as $item){
        if(($item['item_user']) == $item_user){
            $items_group[] = $item;
        }
    }
?>

<body style="background-image: url('assets/img/123.jpg');background-attachment: fixed;background-size: cover;height: 1080px;">
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
                    <
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
    <div class="container">
    <!-- Начало списка блоков -->
        <div class="row product-list dev">
    <!-- Начало списка блоков -->
    <?php
        global $n;
        $n = 1;
        foreach($items_group as $item){
            echo'
            <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
                <div class="product-container" style="min-height: 440px;">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="includes/product_images/'.$item['item_image'].'"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2>'.$item['item_name'].'</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description" style="max-height: 80px; min-height: 80px; overflow-x: hidden;">'.$item['item_text'].'</p>
                            <div class="row">
                                <form id="go_product'.$n.'" action="product.php" method="get" style="display: none"><input name="itemID" type="text" value="'.$item['id'].'"></form>
                                <div class="col-6"><button form="go_product'.$n.'" class="btn btn-light" type="submit" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">'.$item['item_cost'].' ₽</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ';
            $n++;
        }
    ?>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
</body>

</html>