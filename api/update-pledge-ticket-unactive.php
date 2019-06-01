<?php

    $id = $_GET['id'];

    $connect = mysqli_connect("localhost", "root", "", "pawn_shop");
    if ($connect) {
        $sql = "UPDATE PledgeTicket SET `IsActive` = 'N' WHERE `PledgeTicketID` = '$id'";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            $status = array('code' => '0','txt' => 'Update success');
            $arr = array('status' => $status,'data' => '');
        } else {
            $status = array('code' => '1','txt' => 'Query error' . mysqli_errno($connect));
            $arr = array('status' => $status,'data' => '');
        }
    } else {
        $status = array('code' => '1', 'txt' => mysqli_content_errno($connect));
        $arr = array('status' => $status, 'data' => '');
    }

    $myjson = json_encode($arr);
    echo $myjson;

?>