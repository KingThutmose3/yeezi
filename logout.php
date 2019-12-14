<?php

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: kanyeld.php"); // Redirecting To Home Page
}
?>