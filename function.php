<?php 
$db = mysqli_connect('localhost','root','12345.','project3');

function query($query){
    global $db;
    $result = mysqli_query($db,$query);
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}
?>