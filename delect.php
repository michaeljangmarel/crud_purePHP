<?php

require_once('./conect.php');

$getinfo = $_GET['id'];

$sql = "DELETE FROM  user WHERE id = $getinfo";

$plus  = mysqli_query($db,$sql);


if($plus){
    header('location:./read.php');

}else{
    echo 'DELECT FAILED '.mysqli_err();
}


?>