<?php include('header.php') ?>

<?php
  $dbc = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($dbc, 'myblog');

  if (isset($_POST['submitted'])) {
    //Handle the form.
    $dbc = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($dbc, 'myblog');

    $departure = ($_POST['departure']);
    $destination = ($_POST['destination']);
    $leaveDate = ($_POST['leaveDate']);
    $returnDate = ($_POST['returnDate']);
    $duration = ($_POST['duration']);
    $bus = ($_POST['bus']);
    $price = ($_POST['price']);
    $qty = ($_POST['qty']);
    $image = ($_POST['image']);

      //Define the query
      $query = "INSERT INTO busticket (entry_id, departure, destination, leaveDate, returnDate, duration, bus, price, qty, image, data_entered)
      VALUES (0, '$departure','$destination','$leaveDate','$returnDate','$duration', '$bus', '$price', '$qty', '$image', NOW())";
      if (mysqli_query($dbc, $query)) {
        echo "<p style='color: green;'><b>The blog entry has been added ! </b><p>";
      }
      else {
        echo "<p style='color: red;'>Could not add the entry because:<br />" . mysqli_error($dbc). "</p><p>The query was: ". $query . "</p>";
      }
      mysqli_close($dbc);
    }
?>
    <center><br /><br />
    <h2> Admin Add Bus Ticket Control </h2>
    <img src="images/add.png">
    <form action ="addBus.php" method="post">
        <p>Departure: </p><p> <input type ="text" name="departure" size="40" maxsize="100"/></p>
        <p>Destination: </p><p> <input type ="text" name="destination" size="40" maxsize="100"/></p>
        <p>Departure Date: </p><p> <input type ="text" name="leaveDate" size="40" maxsize="10"/></p>
        <p>Return Date: </p><p> <input type ="text" name="returnDate" size="40" maxsize="10"/></p>
        <p>Duration: </p><p> <input type ="text" name="duration" size="40" maxsize="10"/></p>
        <p>Bus Company: </p><p> <input type ="text" name="bus" size="40" maxsize="10"/></p>
        <p>Price: </p><p> <input type ="text" name="price" size="40" maxsize="10"/></p>
        <p>Quantity: </p><p> <input type ="text" name="qty" size="40" maxsize="10"/></p>
        <p>Image File Name (e.g PNG/JPEG etc):</p><p> <input type ="text" name="image" size="40" maxsize="10"/></p>

        <br /><br />

        <input type="submit" name="submit" value="Add Bus Ticket" />
        <input type="hidden" name="submitted" value="true" />
        <br /><br /><br /><br /><br /><br /><br /><br /><br />
    </form>
    </body>

  <?php include('footer.php') ?>
