<?php

session_start();
if(!$_SESSION["loggedIn"]){
    header("Location: ../CSE466_Voting/login.html");
    exit;
}

function getLabels(){
    $db = mysqli_connect('localhost','root','password','db_voting');

    //    Make the vote query to display them
    $query  = "SELECT COUNT(voter), candidate FROM votes GROUP BY candidate";
    $result = $db->query($query);
    $string = "";

    while ($row = $result->fetch_assoc()) {
        $string .= "'";
        $string .= $row["candidate"];
        $string .= "'";
        $string .= ",";
    }
    $modifiedString = substr($string, 0, -1);
    return $modifiedString;
}

function getValues()
{
    $db = mysqli_connect('localhost','root','password','db_voting');

    //    Make the vote query to display them
    $query  = "SELECT COUNT(voter), candidate FROM votes GROUP BY candidate";
    $result = $db->query($query);
    $string = "";



    while ($row = $result->fetch_assoc()) {
        $string .= "'";
        $string .= $row["COUNT(voter)"];
        $string .= "'";
        $string .= ",";
    }
    $modifiedString = substr($string, 0, -1);
    return $modifiedString;
}


function getGraph(){


    echo "<script>const xArray=";
    echo "[", getLabels() ,"]",";";
    echo "const yArray=";
    echo "[", getValues() ,"]",";";
    echo "
    const data = [{
        labels:xArray,
        values:yArray,
        type:'pie',
        orientation:'v',
        marker: {color:'rgba(0,0,255,0.6)'}
    }];

    const layout = {title:'Current Voting', paper_bgcolor:'black'};

    Plotly.newPlot('myPlot', data, layout);
</script>";


}
