<?php
    header("content-type:application/json;charset=utf-8");
    require("common.php");
    $sql = "SELECT * FROM c_color";
    $result = mysqli_query($conn,$sql);
    $list = mysqli_fetch_all($result,MYSQLI_ASSOC);
    echo json_encode($list);
?>