<?php

//CONNECTING TO THE DATABASE:
$servername = "localhost";
$username = "root";
$password = "";
$database ="CRUD2";
// U NEEED A CONNECTION OBJECT
//create a connection:
// $conn = mysqli_connect($servername, $username, $password, "",'CRUD2', 3308);// port number must be entered here to run MySql on localhost
$conn = mysqli_connect('localhost', 'root',"",'CRUD2' , 3308 ); //port number must be entered here to run MySql on localhost

//error handling for the connection, or Die if connection was not succesfull:
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
 echo "Connection was successfull";
}

$title="mama";
$description="housewife";
//SQL query to be executed in following two ways:
// $sql= "INSERT INTO `phpcrudoperations` (`sno`, `title`, `description`, `tstamp`) VALUES ('4', 'hamza', ' nondeveloper', '2024-11-16 17:40:41.000000')";
$sql= "INSERT INTO `phpcrudoperations` (`sno`, `title`, `description`, `tstamp`) VALUES ( '7','$title', ' $description', '2024-11-16 17:40:41.000000')";

$result= mysqli_query($conn, $sql);
//put a check to sure for the creativity of database:
    if($result){
       echo "Note has been inserted sucessfully!<br>";
    }
    else{
        echo"Note has  not been inserted sucessfully!  ....>" .  mysqli_error($conn);
    }
?>
