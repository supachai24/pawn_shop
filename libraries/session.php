<?php

    session_start();
    $connect = mysqli_connect("localhost", "root", "", "pawn_shop");
    $check_session = $_SESSION['login_user'];
    $sql = "SELECT `Fullname` FROM `User` WHERE `Username` = '$check_session'";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
    $login_session = $row['Fullname'];

    if (!isset($_SESSION['login_user'])) {
		header("location:auth-login.php");
	}

?>