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
    <link rel="stylesheet" href="assets/css/Forum---Thread-listing-1.css">
    <link rel="stylesheet" href="assets/css/Forum---Thread-listing.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<?php
    require "includes/session.php";
    require "includes/db.php";
    $users = R::findAll('users');
?>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><img style="width: 65px;height: 65px;margin-left: -77px;" src="assets/img/kisspng-unidentified-flying-object-desktop-wallpaper-compu-5b2e7392a14c08.6459674515297708986607.png"><a class="navbar-brand" href="./main.php" style="color: #5d3193;margin-left: 13px;">НЛО</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto"></ul>
                <div class="form-group" style="margin-left: 5px;margin-bottom: -3px;margin-right: 196px;width: auto;"><label for="search-field"></label></div><span class="navbar-text actions" style="border-bottom: 2px solid rgb(93,49,147);height: 35px;"> <a class="login" href="admin_panel.php" style="margin-right: 2px;">Назад</a></span></div>
        </div>
    </nav>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <div class="row padMar">
                <div class="col padMar" style="margin-top: 29px;margin-bottom: 20px;">
                    <div class="input-group">
                        <div class="input-group-prepend"></div><form id="search" style="padding: 0; border: none;" class="form-control autocomplete" action="includes/users_search.php" method="get"><input class="form-control autocomplete" type="email" name="user_email" placeholder="Введите email пользователя"></form>
                        <div class="input-group-append"><button form="search" class="btn btn-warning" type="submit" style="background-color: #5d3193;border-color: #5d3193;"><i class="fa fa-search" style="color: #ffffff;"></i></button><form id="reload" action="includes/search_reload.php" method="get"></form><button form="reload" class="btn btn-primary" type="submit" style="margin-left: 3px;background-color: #5d3193;border-color: #5d3193;">Сброс</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
            <ul class="thread-list">
                <?php
                    if( ! empty($_SESSION['errors'])){
                        echo '<div style="color: red;">'.array_shift($_SESSION['errors']).'</div>';
                    //search_result
                    }elseif(! empty($_SESSION['user_name'])){
                        $k = $_SESSION['user_status'];
                        //user
                        if($k == 1){
                            echo '<li class="thread"><span class="time" style="width: 192px;">'.$_SESSION['user_email'].'</span><span class="time" style="width: auto;">'.$_SESSION['user_name'].' '.$_SESSION['user_surname'].'</span><span class="icon"><form id="moder" style="display: none;" action="includes/moderr.php" method="post"></form><a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder\').submit()"><i style="color: blue" class="fa fa-wrench" style="width: 20px;"></i></a><span class="time" style="width: 195px;">Сделать администратором</span>
                            <form id="ban" style="display: none;" action="includes/bann.php" method="post"></form><a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban\').submit()"><i style="color: red" class="fa fa-legal"></i></a><span class="time" style="width: 195px;">Заблокировать пользователя</span></span>
                            </li>';
                        //banned
                        }elseif($k == 3){
                            echo '<li class="thread"><span class="time" style="width: 192px;">'.$_SESSION['user_email'].'</span><span class="time" style="width: auto;">'.$_SESSION['user_name'].' '.$_SESSION['user_surname'].' (Заблокирован)</span><span class="icon"><form id="moder" style="display: none;" action="includes/moderr.php" method="post"></form><a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder\').submit()"><i style="color: blue" class="fa fa-wrench" style="width: 20px;"></i></a><span class="time" style="width: 195px;">Сделать администратором</span>
                            <form id="ban" style="display: none;" action="includes/razbann.php" method="post"></form><a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban\').submit()"><i style="color: green" class="fa fa-legal"></i></a><span class="time" style="width: 195px;">Разблокировать пользователя</span></span>
                            </li>';
                        //moderator   
                        }else{
                            echo '<li class="thread"><span class="time" style="width: 192px;">'.$_SESSION['user_email'].'</span><span class="time" style="width: auto;">'.$_SESSION['user_name'].' '.$_SESSION['user_surname'].' (Администратор)</span><span class="icon"><form id="moder" style="display: none;" action="includes/unmoderr.php" method="post"></form><a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder\').submit()"><i style="color: green" class="fa fa-wrench" style="width: 20px;"></i></a><span class="time" style="width: 195px;">Удалить права администратора</span>
                            <form id="ban" style="display: none;" action="includes/bann.php" method="post"></form><a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban\').submit()"><i style="color: red" class="fa fa-legal"></i></a><span class="time" style="width: 195px;">Заблокировать пользователя</span></span>
                            </li>';
                        }
                    //all users list
                    }else{
                        global $n;
                        $n = 1;
                        foreach($users as $row){
                        global $n;
                        $k = $row['user_status'];
                        //user
                        if($k == 1){
                            echo '<li class="thread"><span class="time" style="width: 192px;">'.$row['user_email'].'</span><span class="time" style="width: auto;">'.$row['user_name'].' '.$row['user_surname'].'</span><span class="icon"><form id="moder'.$n.'" style="display: none;" action="includes/moderr.php" method="post"><input type="text" name="button" style="display: none;" value="'.$n.'"></form><a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder'.$n.'\').submit()"><i style="color: blue" class="fa fa-wrench" style="width: 20px;"></i></a><span class="time" style="width: 195px;">Сделать администратором</span>
                            <form id="ban'.$n.'" style="display: none;" action="includes/bann.php" method="post"><input type="text" name="button" style="display: none;" value="'.$n.'"></form><a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban'.$n.'\').submit()"><i style="color: red" class="fa fa-legal"></i></a><span class="time" style="width: 195px;">Заблокировать пользователя</span></span>
                            </li>';
                        //banned
                        }elseif($k == 3){
                            echo '<li class="thread"><span class="time" style="width: 192px;">'.$row['user_email'].'</span><span class="time" style="width: auto;">'.$row['user_name'].' '.$row['user_surname'].' (Заблокирован)</span><span class="icon"><form id="moder'.$n.'" style="display: none;" action="includes/moderr.php" method="post"><input type="text" name="button" style="display: none;" value="'.$n.'"></form><a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder'.$n.'\').submit()"><i style="color: blue" class="fa fa-wrench" style="width: 20px;"></i></a><span class="time" style="width: 195px;">Сделать администратором</span>
                            <form id="ban'.$n.'" style="display: none;" action="includes/razbann.php" method="post"><input type="text" name="button" style="display: none;" value="'.$n.'"></form><a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban'.$n.'\').submit()"><i style="color: green" class="fa fa-legal"></i></a><span class="time" style="width: 195px;">Разблокировать пользователя</span></span>
                            </li>';
                        //moderator   
                        }else{
                            echo '<li class="thread"><span class="time" style="width: 192px;">'.$row['user_email'].'</span><span class="time" style="width: auto;">'.$row['user_name'].' '.$row['user_surname'].' (Администратор)</span><span class="icon"><form id="moder'.$n.'" style="display: none;" action="includes/unmoderr.php" method="post"><input type="text" name="button" style="display: none;" value="'.$n.'"></form><a class="subscribe" href="javascript:void(0)" onclick="document.getElementById(\'moder'.$n.'\').submit()"><i style="color: green" class="fa fa-wrench" style="width: 20px;"></i></a><span class="time" style="width: 195px;">Удалить права администратора</span>
                            <form id="ban'.$n.'" style="display: none;" action="includes/bann.php" method="post"><input type="text" name="button" style="display: none;" value="'.$n.'"></form><a class="flag" href="javascript:void(0)" onclick="document.getElementById(\'ban'.$n.'\').submit()"><i style="color: red" class="fa fa-legal"></i></a><span class="time" style="width: 195px;">Заблокировать пользователя</span></span>
                            </li>';
                        }
                        $_SESSION["user_change$n"] = $row['id'];
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
</body>

</html>