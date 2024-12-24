<?php
//database connection details
$host ='localhost';
$username = 'root';
$password ='';
$database ='laundry_management';

//create connection
$conn = new mysqli($host,$username,$password,$database);

//check connection
if($conn->connect_error){
    die("connection faild:" .$conn->connect_error);

}


//check form submit
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name =$conn->real_escape_string($_POST['name']);
    $contact =$conn->real_escape_string($_POST['contact']);
    $address =$conn->real_escape_string($_POST['address']);
    $email =$conn->real_escape_string($_POST['email']);

    $sql = "INSERT INTO customer (name ,email, contact, address) VALUES ('$name', '$email', '$contact', ' $address')";

    if($conn->query($sql) === TRUE){
        echo"Data Successfully Inserted!";
        
    }else{
        echo"ERROR: ".$sql ."<br>" .$conn->error;
    }

    $conn->close();

}
?>
