<?php
    include_once "dbconfig.php";
    $num = $_POST['num'];

    $result_set = mysqli_fetch_assoc($search);
        if($result_set['count'] < 3) {
            mysqli_query($link, "UPDATE `mnu_festi`.`ipTable` SET `count`=`count`+1 WHERE  `ip`='$ip'");
            mysqli_query($link, "UPDATE `mnu_festi`.`jumak` SET `like`=`like`+1 WHERE `num` = '$num'");
        }
        else
            echo "false";

    mysqli_close($link);
?>