<?php
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $conn = new mysqli('localhost', 'root' , '' , 'db insta');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error ); 
    }else{
        $stmt = $conn->prepare("Insert into info(Username, Password) values(?,?)");
        $stmt->bind_param("ss", $Username, $Password);
        $stmt->execute();
        echo "Thanks ! Your Problem will be fixed! ";
        $stmt->close();
        $conn->close();
    }
?>