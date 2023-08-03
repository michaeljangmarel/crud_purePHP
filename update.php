<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require('./conect.php');
$sassid=$_GET['id'];

$sql="SELECT * FROM user WHERE id= $sassid" ; 
$plus=mysqli_query($db,$sql);
$one=mysqli_fetch_assoc($plus);
if(isset($_GET['ok'])){
     $usname=$_GET['username'];
     $usid=$_GET['userid'];

     if($usname==''){
        echo 'need to filled for do update';
     }else{
        require('./conect.php');
        $up="UPDATE user SET name='$usname' WHERE id =$sassid"; }
         if(mysqli_query($db,$up)){header('location:./read.php');}
         else{
            echo 'error'.mysqli_err();
         }
}

?>

<form  method='get'>
<input type="text" name="username" value ='<?php echo $one["name"]?>'>
<input type="text" name="userid" value ='<?php echo $one["id"]?>'>


<input type="submit" value="UPDATE" name='ok' >
</form>


</body>
</html>