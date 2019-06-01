<?php

    $connect = mysqli_connect("localhost", "root", "", "pawn_shop");
    mysqli_query($connect,"SET character_set_results=utf8");
    mysqli_query($connect,"SET character_set_client='utf8'");
    mysqli_query($connect,"SET character_set_connection='utf8'");

    if ($connect) {
        $sql = "SELECT a.*, b.*, c.*, d.*, e.*, f.*, g.* FROM `PledgeTicket` a
                LEFT JOIN `Asset` b ON a.AssetID = b.AssetID
                LEFT JOIN `Customer` c ON a.CustomerID = c.CustomerID
                LEFT JOIN `PledgeStatus` d ON a.PledgeStatusID = d.PledgeStatusID
                LEFT JOIN `Category` e ON b.CategoryID = e.CategoryID
                LEFT JOIN `SubCategory` f ON b.SubCategoryID = f.SubCategoryID
                LEFT JOIN `Title` g ON c.TitleID = g.TitleID";
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