<?php include('header.php') ?>

<?php
  $dbc = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($dbc, 'myblog');

  $query = 'SELECT * FROM mycart ORDER BY leaveDate DESC';
  echo "<center>";
  echo "<img src=\"images/cart.png\" width=\"150\" height=\"150\">";
  echo "<h3>My Cart</h3>";
  echo "<hr size='1'>";

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
      echo "<br /><a href=\"deleteCart.php?id={$row['entry_id']}\">Delete</a><br />";
      echo "<br /><a href=\"purchase.php?id={$row['entry_id']}\">Purchase Now</a><br />

      <br />
      </td>
      </tr>";
    }
    echo "</table>";

  }else {
    echo "<p style=\"color: red\">Could not retrieve data because:<br />" . mysqli_error() . ".</p><p>The query being run was:" .$query. "</p>";
  }

  echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";

mysqli_close($dbc);
?>




<?php include('footer.php') ?>
