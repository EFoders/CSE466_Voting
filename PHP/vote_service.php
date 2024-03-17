<?php
session_start();
if(!$_SESSION["loggedIn"]){
    header("Location: ../CSE466_Voting/login.html");
    exit;
}




if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check vote
    if(empty(trim($_POST["vote"]))){
        // if bad request do nothing
        header("location: /CSE466_Voting/vote.html");
        exit;
    } else{
        $vote = trim($_POST["vote"]);
    }




    //    Connect to the database
    $db = mysqli_connect('localhost','root','password','db_voting');

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Check if they've already voted
    // prepare and bind
    $stmt = $db->prepare("SELECT * FROM votes WHERE voter=?");
    $stmt->bind_param("s", $user);

    // set parameters and execute
    $user = $_SESSION["username"];
    $stmt->execute();
    $result = $stmt->get_result();
    $row_cnt = $result->num_rows;
    if ($row_cnt != 0) {
        header("location: /CSE466_Voting/vote.html");
        exit();
    }
    echo $row_cnt;

    //IF not voted:

    // prepare and bind
    $stmt = $db->prepare("INSERT INTO votes (voteid, voter, candidate) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $voteid, $voter, $candidate);

    // set parameters and execute
    $voteid = '0';
    $voter = $_SESSION["username"];
    $candidate = $vote;
    $stmt->execute();
}

header("location: /CSE466_Voting/vote.html");
exit;

