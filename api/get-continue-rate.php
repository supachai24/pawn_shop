<?php

    $id = $_GET['id'];

    $connect = mysqli_connect("localhost", "root", "", "pawn_shop");
    mysqli_query($connect,"SET character_set_results=utf8");
    mysqli_query($connect,"SET character_set_client='utf8'");
    mysqli_query($connect,"SET character_set_connection='utf8'");

    if ($connect) {
        $sql = "SELECT * FROM `ContinueRate` WHERE `PledgeTicketID` = '$id'";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            $myarraylist = array();
            $count = 0;
            while ($row = mysqli_fetch_assoc($query)) {
                array_push( $myarraylist,$row);
            }

            $status = array('code' => '0', 'txt' => '');
            $arr = array('status' => $status, 'data' => $myarraylist);
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