<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourites</title>
  <style>
    *{
    margin:0px;
    padding:0px;
}
body {
    background:url('./books.jpg') no-repeat fixed center/cover;
      background-color: rgb(54,44,44);
      padding: 0px;
      margin: 0;
      font-family: 'Times New Roman', Times, serif;
    }
.hello{
    font-family: 'Times New Roman', Times, serif;
    font-size: 23px;
    color: #fff;
    margin: 20px;
    text-align: center;
}
ul{
    display: flex;
    position: relative;
    justify-content: center;
    background-color: rgb(54,44,44);

}
    ul li{
        color:white;
        list-style: none;
        font-size:15px;
    }
    ul li a{
        display:block;
        padding:8px 15px;
        border-radius:15px;
        color:white;
        text-decoration:none ;
        font-size: 22px;
    }
    ul li a:hover{
        color:black;
        background-color:rgb(220,202,177);
    }
    .right{
        position:absolute;
        right:20px;
        top:1px;
       }
    .button{
        padding:5px 18px;
        font-family: 'Times New Roman', Times, serif;
        font-size: 22px;
        color: white;
        background-color: rgb(54,44,44);
        border-radius: 10px;
        text-decoration: none;
    }
    .button:hover{
        color: black;
        background-color: rgb(220,202,177);
        padding:5px 18px;
        border-radius: 10px;
        cursor: pointer;
    }
  

    table {
      position: absolute;
      left: 50%;
      top: 365px;
      transform: translate(-50%, -50%);
      border-collapse: collapse;
      width: 800px;
      border: 1px solid #bdc3c7;
      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
      background-color: rgba(67, 52, 37, 0.9);

    }
    tr {
      transition: all .2s ease-in;
      cursor: pointer;

    }

    th {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #fff;
      color: rgb(220, 202, 177);
    }

    td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #fff;
      color: #fff;
    }

    #header {
      background-color: rgb(54, 44, 44);
      color: #fff;
      font-size: 25px;
    }
    tr:hover {
      background-color: rgba(38, 30, 30, 0.604);
      transform: scale(1.02);
      box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
      cursor: auto;
    }

    #hi{
        text-align: left;
    }
    @media only screen and (max-width: 768px) {
      table {
        width: 90%;
      }
    }
    </style>
</head>

<body>
    <div class="navbar">

        <ul>
            <li class="items"><a href="./index.php">Home</a></li>
            <li class="items"><a href="./books.html">Our Books</a></li>
            <li class="items"><a href="./services.html">Services</a></li>
            <li class="items"><a href="./contactus.html">Contact Us</a></li>
        </ul>
        <div class="right">
            <button class="button"> <a class="button" href="logout.php">Log Out</a></button>
        </div>
    </div>
    <div class="hello">
       <p id="hi">Hello  <?php echo $user_data['user_name'];
                ?> </p>
        <p> Your Favourite Genre is <?php echo $user_data['genre'];
                                    ?> </p>
    </div>

    <div class="fav">
        <table class="content-table">
            <tr id="header">
                <th>Genre</th>
                <th>Your all time Favourites</th>
            </tr>

            <tr>
                <td>Classics</td>
                <td> <?php echo $user_data['fav1'];
                        ?></td>
            </tr>
            <tr>
                <td>Detective & Mystery</td>
                <td> <?php echo $user_data['fav2'];
                        ?></td>
            </tr>
            <tr>
                <td>Fantasy</td>
                <td> <?php echo $user_data['fav3'];
                        ?></td>
            </tr>
            <tr>
                <td>Literary Fiction</td>
                <td> <?php echo $user_data['fav4'];
                        ?></td>
            </tr>
            <tr>
                <td>Self Help</td>
                <td> <?php echo $user_data['fav5'];
                        ?></td>
            </tr>
            <tr>
                <td>Science Fiction</td>
                <td> <?php echo $user_data['fav6'];
                        ?></td>
            </tr>
            <tr>
                <td>Romance</td>
                <td> <?php echo $user_data['fav7'];
                        ?></td>
            </tr>
            <tr>
                <td>Biographies & Autobiographies</td>
                <td> <?php echo $user_data['fav8'];
                        ?></td>
            </tr>
            <tr>
                <td>Competitive Exams</td>
                <td> <?php echo $user_data['fav9'];
                        ?></td>
            </tr>
    </div>
</body>

</html>