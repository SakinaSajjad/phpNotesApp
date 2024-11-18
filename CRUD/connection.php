<!--   Ways to connect to a MySql Database
 MySQLi extension: that contains PROCEDURAL and OOPS
If y are sure to use MySQL then it will be preffered it is more focused
PDO: when we are using multiple languages to connect database  -->
<?php
echo "  Welocome to the stage where we are ready to get connected to a database <br>";
//CONNECTING TO THE DATABASE:
$servername = "localhost";
$username = "root";
$password = "";
// U NEEED A CONNECTION OBJECT
//create a connection:
$conn = mysqli_connect($servername, $username, $password, "", 3308);// port number must be entered here to run MySql on localhost
//error handling for the connection, or Die if connection was not succesfull:
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
 echo "Connection was successfull";
}
//create a db PROGRIMATICALLY using php script:
$sql= "CREATE DATABASE CRUD2"; 
//$result gives value either bool is true or is false e.g
// if y have create a database of same name it will through error like bool(false) which means data base of that particular name is already created 
// if y have create a database of different name it will show like bool(true) which means  new name data base is  created 
$result= mysqli_query($conn, $sql);
// echo "The Result is:";
// echo  var_dump($result);
echo "<br>";


//put a check to sure for the creativity of database:
    if($result){
       echo "database is created sucessfully!<br>";
    }

    else{
        echo"database is not created beacuse of this error  ....>" .  mysqli_error($conn);
    }
?>