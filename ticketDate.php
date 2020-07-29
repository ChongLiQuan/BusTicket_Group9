<?php include('header.php') ?>

<?php
  $dbc = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($dbc, 'myblog');

  if(isset($_POST['ticketDate']))


  $query = "SELECT * FROM busticket WHERE leaveDate='{$_POST['ticketDate']}'";

?>
    <center>
    <br /><h3>Select a Departure Date</h3><br />
    <form action="ticketDate.php" method="post">
    <select name="ticketDate">
      <option value="empty">Select a Departure Date:</option>
      <option value="13/9/2020">13/09/2020/</option>
      <option value="20/9/2020">20/09/2020</option>
      <option value="26/9/2020">26/09/2020</option>
      <option value="13/10/2020">13/10/2020</option>
      <option value="21/10/2020">21/10/2020</option>
      <option value="07/11/2020">07/11/2020</option>
    </select>

    <p><input type="submit" name="submit" id="ticketDate" value="Look for Bus Ticket!" />
    <input type="hidden" name="submitted" value="true" />
    </p></form>
  </center>
  <br />
<hr size='1'><br /><br />
<?php
if(isset($_POST['submitted'])){
    if($_POST['ticketDate'] == 0){
      echo "<center><h3>Uh - oh !</h3><br /><br /><br /><h3>Looks like we can't find any available bus on the date, try another date.";
      echo "<br /><br /><br /><img src=\"images/error.png\"></center>";
      echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
    }
  }
    ?>
  <center><img src="images/bus.jpg" height="380" width="800"></center>
<?php

  if(isset($_POST['submitted'])){
      if ($r = mysqli_query($dbc, $query)) {
      echo "<br />";
      echo "<table height=\"20%\" width=\"100%\">";
      echo "<tr>";
      echo "<th>Bus</th>";
      echo "<th>Bus Company & Price</th>";
      echo "<th>Duration</th>";
      echo "<th>Schedule</th>";
      echo "<th>Cart</th>";
      echo "</tr>";
      while ($row = mysqli_fetch_array($r)) {
      echo "<tr>";
      echo "<td width=\"15%\">";
      echo "<br />";
      echo "<a href=\"display.php?id={$row['entry_id']}\"><img src=\"{$row['image']}\"  width=\"150\" height=\"150\"></a>";
      echo "</td>";

      echo "<td width=\"20%\">";
      echo "<h3> {$row['bus']}</h3><br /><h3>Price: {$row['price']} <br />";
      echo "</td>";

      echo "<td width=\"10%\">";
      echo "<h3> {$row['duration']} </h3>";
      echo "</td>";

      echo "<td width=\"40%\">";
      echo "<p><h3>From: {$row['departure']} →  {$row['destination']}</h3></p>";
      echo "<p><h3>From: {$row['leaveDate']} →  {$row['returnDate']}</h3></p>";
      echo "</td>";

      echo "<td>";
      echo "<br /><a href=\"addCart.php?id={$row['entry_id']}\">Add To Cart</a><br />
      <br />
      </td>
      </tr>";
      }
      echo "</table>";
        }
  }

  ?>
<?php
mysqli_close($dbc);
?>

<?php include('footer.php') ?>
