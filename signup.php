<?php
session_start();
include("connection.php");
include("functions.php");
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $Contact_no = $_POST['myno'];
    $Email = $_POST['mail'];
    $genre = $_POST['Genre'];
    if (!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($Contact_no) && !empty($Email) && !empty($genre)) {
        //save to database
        $user_id = random_num(10);
        $query = "insert into data(user_id,user_name,password,Contact_no,Email,genre) values('$user_id','$user_name','$password','$Contact_no','$Email','$genre')";
        mysqli_query($con, $query);
        header("Location: loginbox.php");
        die;
    } else {
        echo  "<p class= 'wrong'>All Fields are Mandatory</p>";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Macondo&family=Playfair+Display&family=Roboto+Flex:opsz@8..144&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Playfair Display';
        }

        body {
            background: url('./books.jpg') no-repeat fixed center/cover;
        }
        .wrong{
          color: white;
          font-size: 20px;
          margin: 8px 8px;
      }
        #box {
            width: 350px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            color: #fff;
        }

        #box h1 {
            font-size: 44px;
            text-align: center;
            margin: 10px 20px;
        }

        #box p {
            font-size: 25px;
            margin: 11px;
        }

        #box input,
        #box select {
            font-size: 14px;
            width: 107%;
            padding: 10px 10px;
            border: 0;
            outline: none;
            border-radius: 5px;
        }

        .signup {
            display: block;
            width: 344px;
            text-align: center;
            text-decoration: none;
            padding: 10px;
            margin: 10px 0%;
            border-radius: 15px;
            background-color: rgba(54, 44, 44, 0.9);
            color: rgb(220, 202, 177);
            font-weight: bold;
            font-size: 20px ;
        }

        .signup:hover {
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
            background-color: rgba(200, 168, 140, 0.85);
            font-size: 35px;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="box">
        <h1>SIGN UP</h1>
        <form method="post">
            <input type="hidden" name="action" value="hypertext_troop">
            <p>User Name</p>
            <input type="text" name="user_name" placeholder="Choose a username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Create new password">
            <p>Contact Number</p>
            <input type="tel" name="myno" placeholder="Enter contact number">
            <p>Email</p>
            <input type="email" name="mail" placeholder="Enter your Email id">
            <label for="sports">
                <p>Genre</p>
            </label>
            <select name="Genre" id="Genre">
                <option value="Choose"> Choose your Favourite Genre</option>
                <option value="Classic">Classic</option>
                <option value="Detectivity & Mystery">Detectivity & Mystery</option>
                <option value="Biographies & AutoBiographies">Biographies & Autobiographies</option>
                <option value="Literary Fiction">Literary Fiction</option>
                <option value="Self-Help">Self-Help</option>
                <option value="Science Fiction">Science Fiction</option>
                <option value="Romance">Romance</option>
                <option value="Fantasy">Fantasy</option>
                <option value="Competitive Exam">Competitive Exam</option>
            </select>

            <button type="submit">Sign Up</button>
            <a class="signup" href="loginbox.php">Already a user? Login Here !</a>
        </form>
    </div>

</body>

</html>