<?php
session_start();
include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
        //read from database
        $query = "select * from data where user_name='$user_name' limit 1";
        $result = mysqli_query($con, $query);
        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
                if (password_verify($password,$user_data['password'])) {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }
            }
        }
        echo  "<p class= 'wrong' >Wrong User Name or Password</p>";
    } else {
        echo "<p class= 'wrong' >Enter details to Login</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Macondo&family=Playfair+Display&family=Roboto+Flex:opsz@8..144&display=swap" rel="stylesheet">
    <style>

    *{
        padding: 0;
        margin: 0;
        font-family: 'Playfair Display';
    }
  body{
    background:url('./books.jpg') no-repeat fixed center/cover;
     }
      .wrong{
          color: white;
          font-size: 20px;
          margin: 13px 8px;
      }
     #box{
         width: 350px;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         position: absolute;
         color: #fff;
     }
     #box h1{
         font-size: 44px;
         text-align: center;
         margin: 20px 0;
     }

     #box p{
         font-size: 28px;
         margin: 15px;
     }
   
     #box input{
         font-size: 16px;
         width: 100%;
         padding: 15px 10px;
         border: 0;
         outline: none;
         border-radius: 5px;
     }

     .signup{
         display: block;
         width: 331px;
         text-align: center;
         text-decoration: none;
         padding: 10px;
         margin: 10px 0%;
         border-radius: 15px;
         background-color: rgba(54,44,44,0.85);
         color: rgb(220,202,177);
         font-weight: bold;
         font-size: 20px;
     }
     .signup:hover{
        transform: scale(1.05); 
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
        text-decoration: underline;
     }
     button {
        margin: 21px 116px;
    padding: 1px;
    width: 39%;
    border-radius: 5px;
    border: 0;
    background-color: rgba(200,168,140,0.9);
    font-size: 35px;
     }
     button:hover{
        transform: scale(1.05); 
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    cursor: pointer;    
    }
       
    </style>
</head>

<body>

    <div id="box">
        <h1>LOGIN</h1>
        <form method="post">
           <p>User Name</p>
           <input type="text" name="user_name" placeholder="User Name">
           <p>Password</p>
           <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button> 
            <a class="signup" href="signup.php">New user? Sign Up Here!<a>
        </form>
    </div>
</body>

</html>