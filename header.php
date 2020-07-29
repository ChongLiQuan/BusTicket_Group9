
<?php
// Start the session
session_start();
?>
<?php

if(isset($_SESSION['usernameID'])){
  $_SESSION['usernameID'];
}else {
  $_SESSION['usernameID'] = "Guest";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Express Bus</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">

<style>
    input[type=submit] {
    width: 20em;  height: 3em;
    color: black;
    font-size: 13px;
    background-color: #F09090;
    }

body{
  <?php

    if(isset($_COOKIE['country'])){
      $_COOKIE['country'];
    }else {
      $_COOKIE['country'] = "Malaysia";
    }

    if(!isset($_COOKIE['language'])){
      $_COOKIE['language'] = "English";
    }
    if(!isset($_COOKIE['currency'])){
      $_COOKIE['currency'] = "MYR";
    }

    if (isset($_COOKIE['font_size'])) {
      echo "\t\tfont-size: ".htmlentities ($_COOKIE['font_size']) . ";\n";
    }else {
      echo "\t\tfont-size: medium; \n";
    }

    if (isset($_COOKIE['background'])) {
      echo "\t\tbackground-color: ".htmlentities ($_COOKIE['background']) . ";\n";
    }else {
      echo "\t\tbackground-color:#F09090; \n";
    }

   ?>
}
</style>
</head>

  <?php
echo "<div class='wrapper row1'> ";
  echo "<header id='header' class='clear'>";
    echo "<div id='hgroup'>";
    echo "<table width='100%'>";
    echo "<tr>";
      echo "<td width='100%'><h1><a href='home.php'>Express Bus<img src='images/bus.png' height='80' width='80'></a></h1><h2>Malaysia Top Rated Bus Online Ticket Service</h2></td>";
    echo "</tr>";
    echo "</table>";

    echo "<hr width='100%'>";

    echo "<table>";
    echo "<tr>";
      echo "<td align='left' width='100%'><p><b>Country:</b> " .$_COOKIE['country']. "<p><b>Language:</b> ".$_COOKIE['language']. " <p><b>Currency:</b> ".$_COOKIE['currency']. "</td>";
      echo "<td align='left' width='20%'><p><b>UserID:</b> " .$_SESSION['usernameID']. "</p></td>";
    echo "</tr>";

    echo "</table>";


    echo "</div>";
    echo "<nav>";
      echo "<ul>";
        echo "<li><a href='ticketDate.php'>Ticket Date</a></li>";
      echo " <li><a href='allTicket.php'>All Ticket</a></li>";
        echo "<li><a href='signUp.php'>Sign Up</a></li>";
        echo "<li><a href='contactUs.php'>Contact Us</a></li>";
        echo "<li><a href='myCart.php'>Cart</a></li>";
        echo "<li><a href='history.php'>History</a></li>";
        echo "<li><a href='setting.php'>Setting</a></li>";
        echo "<li><a href='adminsignin.php'>Admin Page</a></li>";
        echo "<li class='last'><a href='Signin.php'>Sign In</a></li>";
      echo "</ul>";
    echo "</nav>";
  echo "</header>";
echo "</div>";
?>
