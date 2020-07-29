  <?php include('header.php') ?>

  <?php
  if(isset($_POST['submitted'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $poscode = $_POST['poscode'];
    $gender = $_POST['gender'];
    $submitFailed = 0;

    //Validation for username (allows number but NOT symbols and max 15 digits)
    $checkUsernameSpecialChars = preg_match('@[^\w]@', $username);

    if ($checkUsernameSpecialChars || strlen($username) > 15) {
      echo "<p>Username should be only 15 character in length and should not include any symbols (E.g. &*#$%).</p>";
      $submitFailed = 1;
    }

    if(empty($username)) {
      echo "<p>Username should not be empty.</p>";
    }

    //Validation for empty password
    if (empty($password)) {
      echo '<p>Error. Please enter your a password for your account. </p>';
      $submitFailed = 1;
    }

    // Validate password strength
    $checkUppercase = preg_match('@[A-Z]@', $password);
    $checkLowercase = preg_match('@[a-z]@', $password);
    $checkNumber    = preg_match('@[0-9]@', $password);
    $checkSpecialChars = preg_match('@[^\w]@', $password);

    if(!$checkUppercase || !$checkLowercase || !$checkNumber || !$checkSpecialChars || strlen($password) < 8) {
        echo '<p>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character. (E.g. &*#$%).</p>';
        $submitFailed = 1;
    }else{
        //password submitted Successfully
    }

    //Validate email
    if (empty($email)) {
      echo '<p>Error. Please enter your Email Address. </p>';
      $submitFailed = 1;
    }

    //Validation phone number
    if ( strlen($phone) < 10 || strlen($phone) > 10 ||  is_numeric($phone) == 0) {
      echo "<p>Please only enter numbers (0-9) and with the max length of 10 digits for Phone Number. ";
      $submitFailed = 1;
    }
    else {
      //Successfully register for phone number
    }

    if (empty($address)) {
      echo '<p>Error. Please enter your House Address. </p>';
      $submitFailed = 1;
    }

    //check poscode
    if (empty($poscode)) {
      echo '<p>Error. Please enter your Poscode. </p>';
      $submitFailed = 1;
    }

    $poscodeLength = mb_strlen($poscode);

    if(empty($poscode)==1 || is_numeric($poscode) == 0 || $poscodeLength>5) { //return true =1 if numeric
      switch ($poscode) {
        case (is_numeric($poscode) == 0):
          echo "<p>Please only enter number in your poscode.</p>";
          $submitFailed = 1;
          break;
        case ($poscodeLength>5):
          echo "<p>Please only enter max 5 digits for your poscode (E.g. 11700)</p>";
          $submitFailed = 1;
          break;
        case (is_numeric($poscode) == 0 || $poscodeLength>5):
          echo "<p>Please only enter max 5 digits and only numbers in your poscode.</p>";
          $submitFailed = 1;
          break;
        default:

          break;
      }
    }

    //to check the radio button selection
    if (isset($gender) == 0) {
      echo '<p>Please select your gender.</p>';
      $submitFailed = 1;
    }

    if($submitFailed == 1) {
        echo '<p>Form Submittion Failed !';
    }

    if($submitFailed == 0) {
      echo '<p>Form Submited Successfully ! Thank you for your information. We will get to you within the next 1-2 working days.';
    }
}
  echo" <center>";
    echo" <table>";
      echo" <tr>";
        echo" <td>";
        echo" <br />";
        echo" <br />";
          echo" <center><a href='home.php'><img src='images/member.jpg' width='700' height='270'></a> ";
          echo "<br /><br /><br />";
          echo" <h1>Create a New Account with Us</h1>";
          echo "<form id='contact' action='signup.php' method='post'>";
          echo" <br />";
          echo" <p><input type='text' name='username' placeholder='Username'/></p>";
          echo" <p><input type='text' name='password' placeholder='Password'/></p>";
          echo" <p><input type='text' name='email' placeholder='Email Address'/></p>";
          echo" <p><input type='text' name='phone' placeholder='Phone Number (+06)'/></p>";
          echo" <p><input type='text' name='address' placeholder='Address'/></p>";
          echo" <p><input type='text' name='poscode' placeholder='Poscode'/></p>";
    echo"  <center>";

      echo" <table>";
        echo" <tr>";
          echo" <td><input type='radio' id='male' name='gender' value='male'>";
          echo" <label for='male' style='color:black'>Male</label><br></td>";
          echo" <td></td><td></td>  <td></td><td></td> <td></td><td></td> <td></td><td></td> <td></td><td></td>";
          echo" <td><input type='radio' id='female' name='gender' value='female'>";
          echo" <label for='female' style='color:black'>Female</label><br></td>";
        echo" </tr>";
      echo" </table>";
    echo" </center>";
    echo "<br /><br />";
    echo "<input type='submit' name='submit' value='Submit' />";
    echo "<input type=\"hidden\" name=\"submitted\" value=\"true\" /></button></td>";
    echo" </form>";
    echo"</form>";
    echo" </div>";
  echo" </div>";
    echo" </td>";
    echo" <td>";
    echo" </td>";
    echo" </tr>";
  echo" </center>";
  echo" </table>";
  echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";

?>
  <?php include('footer.php') ?>
