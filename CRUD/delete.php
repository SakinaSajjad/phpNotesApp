<?php
//CONNECTING TO THE DATABASE:
$servername = "localhost";
$username = "root";
$password = "";
$database ="CRUD2";
// U NEED A CONNECTION OBJECT
//create a connection:
$conn = mysqli_connect($servername, $username, "", 'CRUD2', 3308);// port number must be entered here to run MySql on localhost
//ANOTHER WAY:
// $conn = mysqli_connect('localhost', 'root',"",'CRUD2' , 3308 ); port number must be entered here to run MySql on localhost

//error handling for the connection, or Die if connection was not succesfull:
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
 echo "Connection was successfull";
}

// deleing data:
$sql="DELETE FROM `phpcrudoperations` WHERE `sno` = 2";
$result= mysqli_query($conn, $sql);
echo "<br>";


//affected rows:
$aff= mysqli_affected_rows($conn);
echo "Number of affected rows:$aff";
echo "<br>";

if ($result) {
    echo "Data  is deleted  succesfully " ;
 }
 else{
  echo "Data is not deleted succesfully";
 }

?>