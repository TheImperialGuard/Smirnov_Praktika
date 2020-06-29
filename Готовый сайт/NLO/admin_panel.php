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
    require "includes/admin_protect.php";
?>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><img style="width: 65px;height: 65px;margin-left: -77px;" src="assets/img/kisspng-unidentified-flying-object-desktop-wallpaper-compu-5b2e7392a14c08.6459674515297708986607.png"><a class="navbar-brand" href="./main.php" style="color: #5d3193;margin-left: 13px;">НЛО</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto"></ul>
                <div class="form-group" style="margin-left: 5px;margin-bottom: -3px;margin-right: 196px;width: auto;"><label for="search-field"></label></div><span class="navbar-text actions" style="border-bottom: 2px solid rgb(93,49,147);height: 35px;"> <a class="login" href="user_profile.php" style="margin-right: 2px;">Назад</a></span></div>
        </div>
    </nav>
    <hr>
    <div style="margin-top: 91px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><a href="users_admin_panel.php"><img src="assets/img/img_542889.png" style="width: 200px;margin-left: 176px;"></a></div>
                <div class="col-md-6"><a href="category_admin_panel.php"><img src="assets/img/775351_document_512x512.png" style="width: 150px;margin-left: 185px;"></a></div>
            </div>
        </div>
    </div>
    <div style="margin-bottom: 90px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a style="color: #000 !important; text-decoration: none" href="users_admin_panel.php"><h1 style="margin-left: 51px;">Редактор пользователей</h1></a>
                </div>
                <div class="col-md-6">
                    <a style="color: #000 !important; text-decoration: none" href="category_admin_panel.php"><h1 style="margin-left: 78px;">Редактор категорий</h1></a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>