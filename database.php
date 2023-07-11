<?php
    $FirstName=$_POST['FirstName']
    $LastName=$_POST['LastName']
    $EmailId=$_POST['EmailId']
    $Password=$_POST['Password']
    $ConfirmPassword=$_POST['ConfirmPassword']


    $conn = mysqli_connect('localhost:3306','root','','register');
    if($conn->connect_error){
        die('connection Failed:'.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into registrations(FirstName,LastName,EmailId,Password,ConfirmPassword)values(?,?,?,?,?)");
        $stmt->bind_param("sssss",$FirstName,$LastName,$EmailId,$Password,$ConfirmPassword);
        $stmt->execute();
        echo "registeration successfully";
        $stmt->close();
        $conn->close();  
    }  
    

?>


