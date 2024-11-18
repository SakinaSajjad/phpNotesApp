
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
//create a db TABLE:
$sql= "CREATE TABLE `PHPcrudoperations` (`sno` INT(11) NOT NULL AUTO_INCREMENT , `title` TEXT NOT NULL , `description` VARCHAR(50) NOT NULL , `tstamp` DATETIME NOT NULL , PRIMARY KEY (`sno`))";
$result= mysqli_query($conn, $sql);
echo "<br>";

//put a check to sure for the  creation  of Table:

if($result){
    echo "Table is created sucessfully!";
 }

 else{
     echo "Table is not created beacuse of this error  ....>".mysqli_error($conn);
 }
?>


