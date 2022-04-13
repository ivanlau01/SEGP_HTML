<?php
    session_start();
    //Database connection here
    $con = new mysqli("localhost","root","","segp");
    if($con->connect_error){
        die("Failed to connect:" .$con->connect_error);  
    } else{
        $error = "Incorrect Password!";
        $success = "Welcome!";
        $error2 = "Incorrect Username!"; 
        $userName = isset($_POST["userName"]) ? $_POST["userName"] : "";
        $password = isset($_POST["password"]) ? $_POST["password"] : "";
        $stmt = $con->prepare("SELECT * FROM registration WHERE userName = ?");
        $stmt->bind_param("s",$userName);
        $stmt->execute();
        $stmt_result = $stmt->get_result();

        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data["userName"] === $userName){
                if($data["password"] === $password){
                    $_SESSION["success"] =$success;
                    header("Location:index.html");
                }else{
                    $_SESSION["error"] = $error;
                    header("Location:loginpage.php");
                } 
            } else{
                $_SESSION["error2"] = $error2;
                header("Location:loginpage.php");
                }
            } else{
                $_SESSION["error2"] = $error2;
                header("Location:loginpage.php");
                }
            }
            
        
     
        ?>