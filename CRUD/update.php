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

//displaying the data which is called from its title y can use also its description as well as its tstamp:
$sql="SELECT * FROM `phpcrudoperations` WHERE `title`='haider'";
$result= mysqli_query($conn, $sql);
echo "<br>";

// function to find the number oof records return
// echo mysqli_num_rows($result);
//Another method is :
$num=mysqli_num_rows($result);
echo $num;
echo"records find in the database<br>";

$no=1;
if($num> 0){
    //displaying
    //while condition becomes false it will enter in loop 
    while ( $row= mysqli_fetch_assoc($result)){
      echo var_dump($row);
        // echo  $no. $row['sno']. "hello". $row['title'] . "The ". $row['description'] . "at". $row['tstamp'];
        echo"<br>";
        // $no=$no+1;
    }
    }

//updating data:
    $sql="UPDATE `phpcrudoperations` SET `title` = 'sakina' WHERE `phpcrudoperations`.`sno` = 4";
        $result= mysqli_query($conn, $sql);
echo "<br>";
//affected rows:
$aff= mysqli_affected_rows($conn);
echo "Number of affected rows:$aff";
echo "<br>";
if ($result) {
   echo "Data is updated succesfully " ;
}
else{
 echo "Data is not updated succesfully";
}

$sql="UPDATE `phpcrudoperations` SET `description` = ' senior developer' WHERE `phpcrudoperations`.`sno` = 4";
$result= mysqli_query($conn, $sql);
echo "<br>";
if ($result) {
   echo "Data  is updated  succesfully " ;
}
else{
 echo "Data is not updated succesfully";
}
    


?>