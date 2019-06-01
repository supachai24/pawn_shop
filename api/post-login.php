<?php
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $connect = mysqli_connect("localhost", "root", "", "pawn_shop");
    if ($connect) {
        $sql = "SELECT * FROM `User` WHERE `Username` = '$username' AND `Password` = '$password'";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            $myarraylist = array();
            $count = 0;
            while ($row = mysqli_fetch_assoc($query)) {
                $myarraylist[$count]['username'] = $row['Username'];
                $myarraylist[$count]['password'] = $row['Password'];
                $myarraylist[$count]['fullname'] = $row['Fullname'];
                $count++;
            }

            $_SESSION['login_user'] = $username;
            $status = array('code' => '0', 'txt' => '');
            $arr = array('status' => $status, 'data' => $myarraylist[0]);
        } else {
            $status = array('code' => '1', 'txt' => mysqli_errno($connect));
            $arr = array('status' => $status, 'data' => '');
        }
    } else {
        $status = array('code' => '1', 'txt' => mysqli_errno($connect));
        $arr = array('status' => $status, 'data' => '');
    }

    $myjson = json_encode($arr);
    echo $myjson;

?>