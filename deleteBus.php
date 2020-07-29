<?php include('header.php')?>
<?php
  $dbc = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($dbc, 'myblog');

  if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    //Define the query
    $query = "DELETE FROM busticket WHERE entry_id={$_GET['id']}";

     if(mysqli_query($dbc, $query)){
     echo "<br /><br /><br />";
     echo "<center>";
     echo "<img src=\"images/tick.png\" width=\"200\" height=\"200\">";
     echo "<h3>You have Deleted that product Successfully !</h3>";
     echo "<br /><br /><br />";
     echo "<p style='color:black'>Want to go back? <a href='myCart.php' style='color:#fc7e0f';><u><b>Go Back</u></b></a></p>";
}
else {
  echo "<p style='color: red;'>Could not add the entry because:<br />" . mysqli_error($dbc). "</p><p>The query was: ". $query . "</p>";
}
echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";

  mysqli_close($dbc);
}
?>

<?php include('footer.php') ?>
