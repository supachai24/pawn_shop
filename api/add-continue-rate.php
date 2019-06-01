<?php

    $id = $_GET['id'];
    $priceRate = $_GET['priceRate'];

    $connect = mysqli_connect("localhost", "root", "", "pawn_shop");
    mysqli_query($connect,"SET character_set_results=utf8");
    mysqli_query($connect,"SET character_set_client='utf8'");
    mysqli_query($connect,"SET character_set_connection='utf8'");

    if ($connect) {
        $sql = "INSERT INTO `ContinueRate` (`PledgeTicketID`, `PriceRate`) VALUES ('$id', '$priceRate')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            $status = array('code' => '0', 'txt' => '');
            $arr = array('status' => $status, 'data' => '');
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