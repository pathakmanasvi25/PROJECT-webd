<?php
session_start();
 include("connection.php");
 include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $user_name=$_POST['user_name'];
      $password=$_POST['password'];
      $Contact_no=$_POST['myno'];
      $Email=$_POST['mail'];
      $genre=$_POST['Genre'];
      if(!empty($user_name)&& !empty($password)&& !is_numeric($user_name))
      {
          //save to database
          $user_id=random_num(10);
          $query="insert into data(user_id,user_name,password,Contact_no,Email,genre) values('$user_id','$user_name','$password','$Contact_no','$Email','$genre')";
          mysqli_query($con, $query);
          header("Location: login.php");
          die; 
      }
      else
      {
          echo "Please enter some valid Information";
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <style type="text/css">
    #text{
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width:100%;
    }
    #button{
        padding: 10px;
        width: 100px;
        color:white;
        background-color: Lightblue;
        border:none;
    }
    #box{
        background-color:grey;
        margin:auto;
        width: 300px;
        padding:20px;
    }
    </style>
    <div id="box">
        <form method="post">
            <input type="hidden" name="action" value="hypertext_troop">
            <div style="font: size 20px;margin:10px;">Sign Up</div>
            User_name :<input type="text" name="user_name"><br><br>
            Password  :<input type="password" name="password"><br><br>
            Contact_No  :<input type="number" name="myno"><br><br>
            Email  :<input type="email" name="mail"><br><br>
            <label for="sports">Genre</label>
            <select name="Genre" id="Genre">
                <option value="Choose"> Choose</option>
                <option value="Classic">Classic</option>
                <option value="Detectivity & Mystery">Detectivity & Mystery</option>
                <option value="Biographies & AutoBiographies">Biographies & AutoBiographies</option>
                <option value="Literary Fiction">Literary Fiction</option>
                <option value="Self-Help">Self-Help</option>
                <option value="Science Fiction">Science Fiction</option>
                <option value="Romance">Romance</option>
                <option value="Fantasy">Fantasy</option>
                <option value="Competitive Exam">Competitive Exam</option>
            </select>

            <input id="button" type="submit" value="Sign Up"><br><br>
            <a href="login.php">Click here to Login!</a><br><br>
</body>
</html>