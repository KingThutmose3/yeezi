<!DOCTYPE html>
<html lang="en">
    <head>
        <title>kanye albums download </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intitial-scale=1.0"> 
        <link rel="stylesheet" type="text/css" href="kss.css" />
    </head>

    <body class="body">
        <header class="mainheader">
            <img src="yeezy.jpg"> 
            <nav>
                <ul>
                    <li ><a href="kanyeld.php">Home</a></li>
                    <li ><a href="kanyeld2.php">yeezus</a></li>
                    <li class="active"><a href="kanyeld3.php">TLOP</a></li>
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
                            <h2><a href="#">login to download</a></h2>
                        </header>
                        <footer>
                            <p class="class-info">Written by the Travye News Trust</p>
                        </footer>
                        <content>
                                <p><img src="yeezus.jpg" /><br>
                                <?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM users WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysqli_error($con).mysqli_errno($con));
		$rows = mysqli_num_rows($result);

        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }
    else
        {

?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required /><br />
<input type="password" name="password" placeholder="Password" required /><br />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>

<br /><br />

</div>
<?php
        } ?>

                        </content>
                    </article>
                    
            </div>
         </div>