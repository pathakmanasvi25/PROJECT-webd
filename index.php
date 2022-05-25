<?php
session_start();
include("connection.php");
include("functions.php");
$user_data=check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>   

     <div class="navbar">
    
        <ul>
            <li class="items"><a href="./index.php">Home</a></li>
            <li class="items"><a href="./books.html">Our Books</a></li>
            <li class="items"><a href="./favourite.php">Your Favourites</a></li>
            <li class="items"><a href="./services.html">Services</a></li>
            <li class="items"><a href="./contactus.html">Contact Us</a></li>
          
         </ul>
        <div class="right">
            <button class="button"> <a class="button" href="logout.php">Log Out</a></button>
        </div>
    </div>
    <div class="hello">
        Hello , <?php echo $user_data['user_name'];
        ?>
    </div>

    <section id="home">
        <span id="welcome">Welcome to our Library</span> 
        <p> The Cosmic Athenaeum</p>
        <p1>Dive into the ocean of books by becoming an exclusive member of our library</p1>
        <button class="btn"><a href="./books.html" class="btn">Explore</a></button>
    </section>
</body>
</html>