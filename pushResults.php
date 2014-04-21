<?php
  session_start();

  require_once('connection.php');

  $loggedin = $_SESSION['loggedin'];
  if ($loggedin){
    $gamesplayed = $_POST['gamesplayed'];
    $numcorrect = $_POST['numcorrect'];
    $cat1 = $_POST['cat1'];
    $cat1 = strtolower($cat1);
    $cat2 = $_POST['cat2'];
    $cat2 = strtolower($cat2);
    $cat3 = $_POST['cat3'];
    $cat3 = strtolower($cat3);
    $cat4 = $_POST['cat4'];
    $cat4 = strtolower($cat4);
    $cat5 = $_POST['cat5'];
    $cat5 = strtolower($cat5);
    $cat6 = $_POST['cat6'];
    $cat6 = strtolower($cat6);

    $query = "UPDATE gamestats SET gamesplayed = gamesplayed + 1 WHERE username = '$username';";
    $query .= "UPDATE gamestats SET numcorrect = numcorrect + . $numcorrect . WHERE username = '$username';";
    $query .= "UPDATE gamestats SET "'$cat1'" = '$cat1' + 1 WHERE username = '$username';";
    $query .= "UPDATE gamestats SET "'$cat2'" = '$cat2' + 1 WHERE username = '$username';";
    $query .= "UPDATE gamestats SET "'$cat3'" = '$cat3' + 1 WHERE username = '$username';";
    $query .= "UPDATE gamestats SET "'$cat4'" = '$cat4' + 1 WHERE username = '$username';";
    $query .= "UPDATE gamestats SET "'$cat5'" = '$cat5' + 1 WHERE username = '$username';";
    $query .= "UPDATE gamestats SET "'$cat6'" = '$cat6' + 1 WHERE username = '$username';";


    mysqli_multi_query($db, $query);
    mysqli_close($db);

    header ('Location: /Game.php');
  }

?>
