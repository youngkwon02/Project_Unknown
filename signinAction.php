<?php
    require 'userDAO.php';
    $in_em = $_POST['user_email'];
    $in_pw = $_POST['user_passwd'];
    $userDAO = new userDAO();
    $result = $userDAO->login_action($in_em, $in_pw);
    if($result === TRUE) {
        $_SESSION['user_name'] = $userDAO->get_userName($in_em);
        header('location: home.php');
    }else {
        header('location: index.php');
    }
?>