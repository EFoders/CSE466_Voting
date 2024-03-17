<?php

session_start();
if(!$_SESSION["loggedIn"]){
    header("Location: ../CSE466_Voting/login.html");
    exit;
}


// In order to vote, We will need to potentially send a key on load, and retrieve the same key to auth post request
// Otherwise it could be faked. Look into this and sessions?



function getData(){
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        //    Connect to the database
        $db = mysqli_connect('localhost','root','password','db_voting');

        //    Make the vote query to display them
        $query  = "SELECT * FROM candidates";
        $result = $db->query($query);

        while ($row = $result->fetch_assoc()) {
            echo '<option value=',$row["party"],'>',$row["party"],'</option>';
        }
    }
}