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
    require "includes/db.php";
?>

<body style="background-image: url('assets/img/123.jpg');background-attachment: fixed;background-size: cover;height: 1080px;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><img style="width: 65px;height: 65px;margin-left: -77px;" src="assets/img/kisspng-unidentified-flying-object-desktop-wallpaper-compu-5b2e7392a14c08.6459674515297708986607.png"><a class="navbar-brand" href="./main.php" style="color: #5d3193;margin-left: 13px;">НЛО</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Избранное</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Чаты</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Категории</a>
                        <div class="dropdown-menu" role="menu" style="margin-left: -20px;"><a class="dropdown-item" role="presentation" href="#">First Item</a><a class="dropdown-item" role="presentation" href="#">Second Item</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                </ul>
                <div class="row padMar">
                    <div class="col padMar" style="width: 346px;margin-right: -46px;margin-left: 45px;">
                        <div class="input-group">
                            <div class="input-group-prepend"></div><input class="form-control autocomplete" type="text" placeholder="Введите название товара">
                            <div class="input-group-append"><button class="btn btn-warning" type="button" style="background-color: #5d3193;border-color: #5d3193;"><i class="fa fa-search" style="color: #ffffff;"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="margin-left: 5px;margin-bottom: -3px;margin-right: 196px;width: auto;"><label for="search-field"></label></div><span class="navbar-text actions"> 

                <?php
                if(isset($_SESSION['logged_user'])){   
                    echo '<a class="login" href="includes/logout.php">Выход</a><a class="btn btn-light action-button" role="button" href="#" style="background: #5d3193;">Личный кабинет</a></span></div>';
                }else{
                    echo '<a class="login" href="./autorisation.php">Вход</a><a class="btn btn-light action-button" role="button" href="./registration.php" style="background: #5d3193;">Регистрация</a></span></div>';
                }
                ?>

        </div>
    </nav>
    <div class="container">
        <div class="row product-list dev">
            <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-clockwise">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-top-right">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-fade-slow">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-fade">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-fade-xslow">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-left">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-top">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-right">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-bottom-left">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-bottom">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-bottom-right">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-clockwise-180">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-counterclockwise">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-counterclockwise-180">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-right-rotate-counterclockwise">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-flip-x">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-left-rotate-clockwise">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-right-flip-x-y">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-flip-y">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 product-item animation-element slide-left-flip-x-y">
                <div class="product-container">
                    <div class="row">
                        <div class="col-md-12"><a class="product-image" href="#"><img src="assets/img/iphone6.jpg"></a></div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <h2><a href="#">iPhone 6s</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ornare sem sed nisl dignissim, facilisis dapibus lacus vulputate. Sed lacinia lacinia magna. </p>
                            <div class="row">
                                <div class="col-6"><button class="btn btn-light" type="button" style="background: #5d3193;">К товару</button></div>
                                <div class="col-6">
                                    <p class="product-price">599.00 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
</body>

</html>