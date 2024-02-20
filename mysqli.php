<?php
$conn=mysqli_connect("localhost","root","","web");

if($conn){
    echo"connected successfully";
}

$sql="SELECT*FROM STUDENT";
$result=mysqli_query($conn, $sql);
while($row=mysqli_fetch_assoc($result)){
    echo"ID:".$row["ID"]."NAME:".$row["NAME"]."ROLL:".$row["ROLL"]."ADDRESS".$row["ADDRESS"]."<BR>";
}
?>