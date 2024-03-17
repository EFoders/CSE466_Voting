<?php
session_start();

// Unset all of the session variables
$_SESSION = array();
$_SESSION['loggedIn'] = false;

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: /CSE466_Voting/landing.html");
exit;