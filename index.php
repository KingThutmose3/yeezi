<?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>introducton/ Download Ye</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intitial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="kss.css" />
    </head>

    <body class="body">
        <header class="mainheader">
        <img src="yeezy.jpg"> 
            <nav>
                <ul>
                <li class="active"><a href="index.php">Home</a></li>
                    <li ><a href="yeezus.php">yeezus</a></li>
                    <li ><a href="tlop.php">TLOP</a></li>
                    <li><a href="wtt.php">Watch  The Throne </a></li>
                    <li><a href="ksg.php">Kids See Ghosts</a></li>
      
                    <li><a href="aboutkw.php" >About Kanye</a></li>
                </ul>
            </nav>
        </header>
        <div class="maincontent">
            <div class="content">
                <article class="topcontent">
                        <header>
                            <h2><a href="#">introducton</a></h2>
                           
                        </header>
                        <footer>
                            <p class="class-info">Written by a Yeezy stan</p>
                        </footer>
                        <content>
                                <p><img src="yeezus.jpg" /><br>
                                <div class="form">
                                <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
                                <p>intro</p>
                                <p>This is a site to download Kanye albums, on this page you can download the Ye album</p>
                                <p><a href="ye.rar">download ye album Zip</a></p>
                                <a href="logout.php">Logout</a>
                        </content>
                    </article>
                    
            </div>
         </div>
        
            <footer class="mainfooter">
                <p>Copyright &copy; 2019 <a href="#">Travye News</a></p>
            </footer>

    </body>
</html>