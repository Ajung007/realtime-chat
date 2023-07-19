<?php
$conn  = mysqli_connect("localhost", "root","","chatapps");
if($conn){
    echo "database connect" . mysqli_connect_error();
}

?>