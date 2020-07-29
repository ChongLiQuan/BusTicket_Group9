<body>
  <?php include('header.php') ?>

  <?php
    $dbc = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($dbc, 'myblog');

      //Define the query
      $query =
      "INSERT INTO mycart (entry_id, departure, destination, leaveDate, returnDate, duration, bus, price, qty, image, data_entered)
      SELECT entry_id, departure, destination, leaveDate, returnDate, duration, bus, price, qty, image, data_entered
      FROM busticket
      WHERE entry_id={$_GET['id']} ";

      if (mysqli_query($dbc, $query)) {
        echo "<br /><br /><br />";
        echo "<center>";
        echo "<img src=\"images/tick.png\" width=\"200\" height=\"200\">";
        echo "<p style='color: green;'><b>The Bus Ticket are added to your cart successfully! </b><p>";
        echo "</center>";

        echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
        echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";

      }
      else {
        echo "<p style='color: red;'>Could not add the entry because:<br />" . mysqli_error($dbc). "</p><p>The query was: ". $query . "</p>";
      }

      mysqli_close($dbc);

      ?>
  <?php include('footer.php') ?>
