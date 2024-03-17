<?php

session_start();
if(!$_SESSION["loggedIn"]){
    header("Location: ../CSE466_Voting/login.html");
    exit;
}


// In order to vote, We will need to potentially send a key on load, and retrieve the same key to auth post request
// Otherwise it could be faked. Look into this and sessions?

?>