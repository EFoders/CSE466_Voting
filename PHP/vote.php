<?php

session_start();
if(!$_SESSION["loggedIn"]){
    header("Location: ../CSE466_Voting/login.html");
    exit;
}

?>