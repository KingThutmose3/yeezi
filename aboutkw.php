<?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>life of kanye</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intitial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="kss.css" />
    </head>

    <body class="body">
        <header class="mainheader">
        <img src="yeezy.jpg"> 
            <nav>
                <ul>
                <li ><a href="index.php">Home</a></li>
                    <li ><a href="yeezus.php">yeezus</a></li>
                    <li ><a href="tlop.php">TLOP</a></li>
                    <li><a href="wtt.php">Watch  The Throne </a></li>
                    <li><a href="ksg.php">Kids See Ghosts</a></li>
      
                    <li class="active"><a href="aboutkw.php" >About Kanye</a></li>
                </ul>
            </nav>
        </header>
        <div class="maincontent">
            <div class="content">
            <article class="topcontent">
                        <header>
                            <h2><a href="#">About kanye</a></h2>
                           <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
                            <p>This is secure area.</p>
                            
                            <a href="logout.php">Logout</a><br />
                        </header>
                        <footer>
                            <p class="class-info">Written by yeezy stans</p>
                        </footer>
                        <content>
                                <p><img src="pablo.jpg" /><br>
                                Buhari has been declared winner of the 2019 Election</p>
                                <p>INEC Chairman decalred him Winner of the election</p>
                                <p>Buhari is the second Nigerian President since the return of<br> democracy to be reelected sin Ibasanjo in 2003</p>
                                p>INEC Chairman decalred him Winner of the election</p>
                                <p>Buhari is the second Nigerian President since the return of<br> democracy to be reelected sin Ibasanjo in 2003</p>
                                p>INEC Chairman decalred him Winner of the election</p>
                                <p>Buhari is the second Nigerian President since the return of<br> democracy to be reelected sin Ibasanjo in 2003</p>
                                p>INEC Chairman decalred him Winner of the election</p>
                                <p>Buhari is the second Nigerian President since the return of<br> democracy to be reelected sin Ibasanjo in 2003</p>
                                p>INEC Chairman decalred him Winner of the election</p>
                                <p>Buhari is the second Nigerian President since the return of<br> democracy to be reelected sin Ibasanjo in 2003</p>
                                p>INEC Chairman decalred him Winner of the election</p>
                                <p>Buhari is the second Nigerian President since the return of<br> democracy to be reelected sin Ibasanjo in 2003</p>
                        </content>
                    </article>
                    
            </div>
         </div>
        
            <footer class="mainfooter">
                <p>Copyright &copy; 2019 <a href="#">Travye News</a></p>
            </footer>

    </body>
</html>