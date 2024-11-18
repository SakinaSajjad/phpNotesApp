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


$sql="SELECT * FROM `phpcrudoperations`";
$result= mysqli_query($conn, $sql);
echo "<br>";

// function to find the number oof records return
// echo mysqli_num_rows($result);
//Another method is :
$num=mysqli_num_rows($result);
echo $num;
echo"records find in the database<br>";

//Display the rows returned by the sql Query
//assoc stands for associated array it will print the data string one by one till the data ends in this code i have 8 rows so i will write this statement 8 times to fetch and dispaly the data 
//but if i have alot of rows and data so i cannot write it so for that purpose i will usee loop 
if($num> 0){
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump( $row);
// echo"<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump( $row);
// echo"<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump( $row);
// echo"<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump( $row);
// echo"<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump( $row);
// echo"<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump( $row);
// echo"<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump( $row);
// echo"<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump( $row);
// echo"<br>";

//while condition becomes false it will enter in loop 
while ( $row= mysqli_fetch_assoc($result)){
  echo var_dump($row);
    // echo $row['sno']. "hello". $row['title'] . "The ". $row['description'] . "at". $row['tstamp'];
    echo"<br>";
}
}

?>