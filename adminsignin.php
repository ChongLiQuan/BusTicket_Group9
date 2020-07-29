
<?php include('header.php') ?>

<?php
echo "<center>";

if(isset($_POST['submitted'])) {
		$username = $_POST['usernameID'];
		$password  = $_POST['password'];
		$submitFailed = 0;

		//check if username and password are empty
		$checkUsernameSpecialChars = preg_match('@[^\w]@', $username);

		if ($checkUsernameSpecialChars || strlen($username) > 15) {
			echo "<p>Username should be only 15 character in length and should not include any symbols (E.g. &*#$%).</p>";
			$submitFailed = 1;
		}

		if (empty($username)) {
			echo "<p style=\"color: red\">Error. Please enter a Admin Username for your account.</p>";
			$submitFailed = 1;
		}


		if (empty($password)) {
			echo "<p style=\"color: red\">Error. Please enter your a Admin password for your account. </p>";
			$submitFailed = 1;
		}

		if ($username == "admin" && $password == "admin") {
			echo "<br /><br /><h5 style=\" color: green\">Sign In Successfully !</h5> ";
			echo "<p>Welcome Back! Admin.</p>";
			echo" <p style='color:black'>Want to add more Product? <a href='admin.php' style='color:red';><u><b>Admin Control Panel</u></b></a></p>";

		}

		if ($username != "admin" && $password != "admin") {
			echo "<img src='images/error1.png' height='100' width='100'>";
			echo "<br /><br /><h5 style=\" color: red\">Sign In Failed !</h5> ";
			echo "<p>Please enter a correct admin account with a valid username and password!</p>";

		}

		if($submitFailed == 1) {
			echo "<p style=\"color: red\">Sign In Failed !</p>";
		}
}
		?>
	<?php
		  echo" <center>";
			echo" <br />";
			echo" <br />";
			  echo" <a href='signin.php'><img src='images/admin.png' width='200' height='200'></a>";
	?>

	<?php
  echo "<center>";
		echo" <div class='login-page'>";
		  echo" <div class='form'>";

        echo "<form id='contact' action='adminsignin.php' method='post'>&nbsp&nbsp";
			  echo" <p><a href='signin.php' style=\"color: red\"><u>Go back</u></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
				echo" <a href='logout.php' style=\"color: red\"><u>Logout</u></a></p>";
        echo "<br /><br />";
			  echo" <h1>Admin Sign In</h1>";
			  echo" <br />";
			  echo" <input type='text' name='usernameID' placeholder='Username'/>";
			  echo" <input type='password' name='password' placeholder='Password'/><br /><br />";
				echo "<p><input type=\"submit\" name=\"submit\" value=\"Login\" style=\"color: black;\"/>";
        echo "<input type=\"hidden\" name=\"submitted\" value=\"true\" />";
        echo "<br /><br />";

			echo" </form>";
		  echo" </div>";
		echo" </div>";
		echo" </center>";
    echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
    echo "<br /><br /><br /><br /><br /><br />";

	?>

	<?php
  include('footer.php')
  ?>
  <?php
		echo" </body>";
		echo" </html>";
	?>
