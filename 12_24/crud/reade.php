<?php 
include 'ConectWithDataBase.php';

$qur = 'select * from `userfone`';

$result = mysqli_query($conect, $qur);

if (!$result){
    die ('error at result :'.mysqli_error());
}
?>