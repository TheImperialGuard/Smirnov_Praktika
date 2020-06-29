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
    $podcategory = array();
    // если 1 вход на страницу -> есть гет, значит код берет оттуда и сохраняет в сессию данный айди
    // если 2 вход на страницу -> нет гета, он берет из сессии айди
    if(!isset($_GET['podcategoryID_for_edit'])){
        $podcategoryID = $_SESSION['podcategory_id'];
        $podcategory = R::load('podcategory', $podcategoryID);
    }else{
    $podcategoryID = $_GET['podcategoryID_for_edit'];
    $_SESSION['podcategory_id'] = $podcategoryID;
    $podcategory = R::load('podcategory', $podcategoryID);
    }
?>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><img style="width: 65px;height: 65px;margin-left: -77px;" src="assets/img/kisspng-unidentified-flying-object-desktop-wallpaper-compu-5b2e7392a14c08.6459674515297708986607.png"><a class="navbar-brand" href="./main.php" style="color: #5d3193;margin-left: 13px;">НЛО</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto"></ul>
                <div class="form-group" style="margin-left: 5px;margin-bottom: -3px;margin-right: 196px;width: auto;"><label for="search-field"></label></div><span class="navbar-text actions" style="border-bottom: 2px solid rgb(93,49,147);height: 35px;"> <a class="login" href="podcategory_admin_panel.php" style="margin-right: 2px;">Назад</a></span></div>
        </div>
    </nav>
    <div class="row">
        <div class="col">
        <?php echo '<h3 style="margin-left: 339px;">'.$podcategory['podcategory_name'].'</h3>'; if(isset($_SESSION['podcategory_change_errors'])){ echo '<div style="color: red; margin-left: 339px;">'.array_shift($_SESSION['podcategory_change_errors']).'</div>'; unset($_SESSION['podcategory_change_errors']);}?>
        </div>
        <div class="col" style="width: 413px;"><form id="podcategory_change" action="includes/category_admin_panel_cfg.php" method="post"><?php echo '<input name="podcategoryID" type="text" style="display: none" value="'.$podcategory['id'].'">'; ?> <input type="text" name="podcategory_name" style="margin-top: 6px;width: 237px;margin-left: -102px;"></form></div>
        <div class="col"><button form="podcategory_change" name="podcategory_change_accept" class="btn btn-primary" type="submit" style="width: 140px;margin: 1px;background-color: #5d3193;border-color: #5d3193;margin-left: -497px;">Переименовать</button></div>
    </div>
    <hr>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>