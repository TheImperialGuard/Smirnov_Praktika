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
    $podcategory = R::findAll('podcategory');
    $category = array();
    // если 1 вход на страницу -> есть гет, значит код берет оттуда и сохраняет в сессию данный айди
    // если 2 вход на страницу -> нет гета, он берет из сессии айди
    if(!isset($_GET['categoryID_for_edit'])){
        $categoryID = $_SESSION['category_id'];
        $category = R::load('category', $categoryID);
    }else{
    $categoryID = $_GET['categoryID_for_edit'];
    $_SESSION['category_id'] = $categoryID;
    $category = R::load('category', $categoryID);
    }
?>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><img style="width: 65px;height: 65px;margin-left: -77px;" src="assets/img/kisspng-unidentified-flying-object-desktop-wallpaper-compu-5b2e7392a14c08.6459674515297708986607.png"><a class="navbar-brand" href="./main.php" style="color: #5d3193;margin-left: 13px;">НЛО</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto"></ul>
                <div class="form-group" style="margin-left: 5px;margin-bottom: -3px;margin-right: 196px;width: auto;"><label for="search-field"></label></div><span class="navbar-text actions" style="border-bottom: 2px solid rgb(93,49,147);height: 35px;"> <a class="login" href="category_admin_panel.php" style="margin-right: 2px;">Назад</a></span></div>
        </div>
    </nav>
    <div class="row">
        <div class="col">
            <?php echo '<h3 style="margin-left: 339px;">'.$category['category_name'].'</h3>'; if(isset($_SESSION['category_change_errors'])){ echo '<div style="color: red; margin-left: 339px;">'.array_shift($_SESSION['category_change_errors']).'</div>'; unset($_SESSION['category_change_errors']);}?>
        </div>
        <div class="col" style="width: 413px;"><form id="category_change" action="includes/category_admin_panel_cfg.php" method="post"><?php echo '<input name="categoryID" type="text" style="display: none" value="'.$category['id'].'">'; ?> <input type="text" name="category_name" style="margin-top: 6px;width: 237px;margin-left: -102px;"></form></div>
        <div class="col"><button form="category_change" name="category_change_accept" class="btn btn-primary" type="submit" style="width: 140px;margin: 1px;background-color: #5d3193;border-color: #5d3193;margin-left: -497px;">Переименовать</button></div>
    </div>
    <hr>
    <div class="row">
        <div class="col">
            <h1 style="margin-left: 40%;">Подкатегории</h1>
        </div>
    </div>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <div class="row padMar">
                <div class="col">
                    <div class="form-group" style="margin-top: 15px;">
                        <div class="col-sm-4"><label class="col-form-label" style="font-family: Lato, sans-serif;font-weight: normal;padding: 0px;font-size: 18px;opacity: 0.73;" for="nombre">Новая подкатегория</label></div><?php if(isset($_SESSION['podcategory_errors'])){ echo '<div style="color: red;">'.array_shift($_SESSION['podcategory_errors']).'</div>'; unset($_SESSION['podcategory_errors']);} ?>
                        <form action="includes/category_admin_panel_cfg.php" method="post"><div class="col-sm-8"><?php echo '<input style="display: none" type="text" name="parent" value="'.$categoryID.'">'; ?><input type="text" name="podcategory"></div><button class="btn btn-primary" name="new_podcategory" type="submit" style="width: 100px;margin: 20px;background-color: #5d3193;border-color: #5d3193;">Добавить</button></form></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <ul class="thread-list">
            <?php
                global $n;
                $n = 1;
                foreach($podcategory as $row){
                global $n;
                if(($row['parent']) == $categoryID){
                echo '
                <li class="thread"><span class="time" style="width: 192px;">'.$row['podcategory_name'].'</span><span class="icon">
                    <form id="podcategory_edit'.$n.'" action="podcategory_edit.php" method="get" style="display: none"><input name="podcategoryID_for_edit" type="text" value="'.$row['id'].'"></form>
                    <form id="podcategory_delete'.$n.'" action="includes/category_admin_panel_cfg.php" method="get" style="display: none"><input name="podcategoryID_for_delete" type="text" value="'.$row['id'].'"></form>
                    <a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'podcategory_edit'.$n.'\').submit()"><i style="color: orange" class="fa fa-cog" style="width: 20px;"></i></a><span class="time" style="width: 119px;">Настроить</span>
                    <a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'podcategory_delete'.$n.'\').submit()"><i style="color: red" class="fa fa-remove"></i></a><span class="time" style="width: 195px;">Удалить</span></span>
                </li>';
                $n++;
                }
                }
                ?>
            </ul>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>