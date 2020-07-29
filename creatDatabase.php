<body>
<?php
//check if can connect database anot
  if ($dbc = mysqli_connect('localhost','root','')) {
    if (!mysqli_select_db($dbc,'myblog')) {
      echo "<p style='color: red;'>Could not select the database because:" . mysqli_error($dbc) . ".</p>";
      mysqli_close($dbc);
      $dbc = FALSE;
    }
  }

//create the table name entries
  if ($dbc) {
    $query = 'CREATE TABLE history (
      entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
      departure VARCHAR(30) NOT NULL,
      destination VARCHAR(40) NOT NULL,
      leaveDate VARCHAR(10) NOT NULL,
      returnDate VARCHAR(10) NOT NULL,
      duration VARCHAR(20) NOT NULL,
      bus VARCHAR(40) NOT NULL,
      price INT NOT NULL,
      qty INT NOT NULL,
      image TEXT NOT NULL,
      data_entered DATETIME NOT NULL
    )';

    //Execute the query
    if (mysqli_query($dbc, $query)) {
      echo "<p>Table table has been created.</p>";
    }
    else {
      echo "<p style='color: red;'>Could not create the table because: <br /></p>". mysqli_error($dbc);
      echo "<p>The query being run was: '. $query .'</p>";
    }

mysqli_close($dbc);
  }
?>
