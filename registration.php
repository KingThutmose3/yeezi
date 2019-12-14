<!DOCTYPE html>
<html lang="en">
    <head>
        <title>site registration</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intitial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="kss.css" />
    </head>

    <body class="body">
        <header class="mainheader">
        <img src="yeezy.jpg">
            <nav>
            <ul>
                    <li class="active"><a href="kanyeld.php">Home</a></li>
                    <li ><a href="kanyeld2.php">yeezus</a></li>
                    <li ><a href="kanyeld3.php">TLOP</a></li>
                    <li><a href="kanyeld4.php">Watch  The Throne </a></li>
                    <li><a href="kanyeld5.php">Kids See Ghost</a></li>
      
                    <li><a href="kanyeld7.php" >About Us</a></li>
                </ul>
            </nav>
        </header>
        <div class="maincontent">
            <div class="content">
                <article class="topcontent">
                        <header>
                            <h2><a href="#">register to login</a></h2>
                        </header>
                        <footer>
                            <p class="class-info">Written by the Travye News Trust</p>
                        </footer>
                        <content>
                        <p><img src="yeezus.jpg" /><br>
              <?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username',  '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='kanyeld.php'>Login</a></div>";


        }
    }else{

?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>

</div>
<?php } ?>

                        </content>
                    </article>
                    
            </div>
         </div>
