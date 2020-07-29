
<?php include('header.php') ?>


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Contact Us</title>
    <style type="text/css">
    <?php echo "<link rel='stylesheet' href='./style.css'>"; ?>

    </style>
  </head>

  <body>
    <center>
    <?php

    if(isset($_POST['submitted'])) {
          $name = $_POST['name'];
          $email  = $_POST['email'];
          $phone = $_POST['phone'];
          $message = $_POST['message'];
          $submitFailed = 0;

          if (empty($name)) {
            echo "<p>Please enter your Name.</p>";
            $submitFailed = 1;
          }

          //Validation for name
          if(!preg_match("/^[a-zA-Z ]*$/",$name)){
            echo "<p>Please only use alphabets in your name. (E.g. Emily Chang)</p>";
            $submitFailed = 1;
          }
          else {
            //Successfully
          }
          
            if (empty($email)) {
              echo "<p>- Email cannot be empty. </p>";
              $flag_error = true;
          } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              /* Email Format Validation */
              echo "<p>- Invalid Email format! </p>";
              $flag_error = true;
          }

          if (empty($email)) {
            echo "<p>Please enter your Email.</p>";
            $submitFailed = 1;
          }

          //Validation phone number
          if ( strlen($phone) < 10 || strlen($phone) > 10 ||  is_numeric($phone) == 0 || empty($phone)) {
            echo "<p>Please only enter numbers (0-9) and with the max length of 10 digits for Phone Number. ";
            $submitFailed = 1;
          }
          else {
            //Successfully register for phone number
          }


          if (empty($message)) {
            echo "<p>Please enter your Message.</p>";
            $submitFailed = 1;
          }

          if ($submitFailed == 1) {
            echo "<p>Form submittion Failed !</p>";
          }

          if($submitFailed == 0) {
            echo '<p>Form Submited Successfully ! Thank you for your information. We will get to you within the next 1-2 working days.';
          }
        }

        echo "<img src='images/contactus.png' height='150' width='150'>";
        echo "<h3>Contact Us</h3>";
        echo "<hr size='1'>";
    echo "<br /><br />";
  		echo "<table height='90%' width='90%' text-align='center'>";
        echo "<tr>";
  		  echo "<form id='contact' action='contactus.php' method='post'>";
  			echo "<th style=\"color: black\">We are here to answer all your question !</th>";
        echo "</tr>";

        echo "<tr>";
  			echo "<th><p>Contact us for more enquiry and fill up the form below:</p></th>";
        echo "</tr>";
        echo "</table>";

    echo "<table height=50%' width='30%' text-align='center'>";

  			echo "<tr>";
          echo "<td><p>Your Name:</p></td>";
  			  echo "<td><input placeholder='Your name' type='text' tabindex='1' name='name'></td></td>";
  			echo "</tr>";

        echo "<tr>";
        echo "<td><p>Email Address:</p></td>";
  			  echo "<td><input placeholder='Your Email Address' type='email' tabindex='3' name='email' ></td>";
  			echo "</tr>";

  			echo "<tr>";
        echo "<td><p>Phone number:</p></td>";
  			  echo "<td><input placeholder='Your Phone Number (+06)' type='tel' tabindex='3' name='phone' ></td>";
  			echo "</tr>";

  			echo "<tr>";
        echo "<td><p>Your Message:</p></td>";
  			  echo "<td><textarea placeholder='Type your message here....' tabindex='5' name='message' ></textarea></td>";
  			echo "</tr>";

  			echo "<tr>";
  			  echo "<td colspan='2' style='text-align: center'><input type=\"submit\" name=\"submit\" value=\"Login\" style=\"color: black;\"/>";
          echo "<input type=\"hidden\" name=\"submitted\" value=\"true\" /></button></td>";
  			echo "</tr>";

  		  echo "</form>";
  		echo "</table>";
  	?>

  	<?php
    echo " <h2> ------------------------------------------------------------------------------------------------------- </h2>";
    echo "<br /><br />";
    echo "<table>";
  		  echo "<center>";
  				echo "<h1> Frequently Asked Questions (FAQ) </h1></center>";
  			   echo "<h1>Call us (Customer Service Department) on: 1300-13-1313</h1>";
  			  echo "<br />";
  				echo "<p>Mon - Fri : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp(8A.M - 6P.M)</p>";
  			   echo "<p>Sat - Sun&nbsp : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp (8A.M - 3P.M)</p>";
  			   echo "<p>Public Holiday : (11A.M - 3P.M)</p>";
    echo "</table>";

    echo "<table height='90%' width='90%' text-align='center'>";
          echo "<tr>";
  			   echo "<th><h1><u>About Us</u></h1></th>";
           echo "</tr>";

           echo "<tr>";
  			   echo "<td><h1>Who are we!</td></h1> ";
           echo "</tr>";

           echo "<tr>";
  				echo "<td><p>redBus is the world's largest online bus ticket booking platform, connecting various cities across the globe with just a click of a button. Founded in 2006, redBus has sold over 75+ Million tickets so far. We are a part of ibibo Group and are backed by Naspers (a South African multinational company). Naspers is transforming the e-commerce industry in over 135 countries with principal operations in internet services, pay-TV, and print media.</p>";
  			  echo "</tr>";

          echo "<tr>";
  			   echo "<td><h1>Our Credentials</h1></td>";
           echo "</tr>";

           echo "<tr>";
  				echo "<td><p> redBus revolutionized the online bus ticket booking industry by bringing together over 2,000 bus operators covering over 100,000 routes across the globe. With its mobile app reaching a download number of over 7.5 million, redBus today is arguably the largest community of bus travellers in the world.</p></td>";
          echo "</tr>";

          echo "<tr>";
  				echo "<td><h1>So, Why Book With Us?</h1></td>";
          echo "</tr>";

          echo "<tr>";
  				echo "<td><p>redBus has the most uncomplicated and hassle-free booking experience ever. Choose your destination, view the seat layout, choose convenient seats, and book your ticket in just a few clicks! The redBus experience does not end with the booking. We have a dedicated customer-care team to cater for your needs while you are on-the-go. We seek regular feedback from our customers and are always striving to better ourselves!</p></td>";
          echo "</tr>";

          echo "<tr>";
  			   echo "<td><h1>The Journey so Far</h1></td>";
           echo "</tr>";

           echo "<tr>";
  				echo "<td><p>2006 - We started in 2006 August.
          2010 - We were amongst the top 5 startups to be watched by Forbes Magazine
          2011 - Our technology was amongst the top 5 winners of the prestigious CIO Asia Award in Singapore
          2012 - 10 million tickets sold. Awarded the Marico Innovation Awards. Received the Porter prize award at IFC Mint Strategy Awards
          2013 - Acquired by ibibo group a joint venture of South Africa's Naspers
          2014 - 20 million tickets sold. Winner of Mobile Innovation in Travel.
          </p></td>";
          echo "</tr>";

          echo "<tr>";
  				echo "<td style='align-text: center'><h1><u>Payment Cards</u></h1></td>";
          echo "</tr>";

          echo "<tr>";
  				echo "<td><h1>1. Do I have to give payment card details to register?</h1></td>";
          echo "</tr>";

          echo "<tr>";
  				echo "<td><p>No, you don’t have to give any payment details when you register. Payment is by card at your door.</p></td>";
          echo "</tr>";

          echo "<tr>";
  			   echo "<td><h1>2. If I cancel an order will my payment card be charged?</h1></td>";
           echo "</tr>";

           echo "<tr>";
  				echo "<td><p>No, if you cancel an order using the My Orders section of the website, you won’t be charged for the order.</p></td>";
          echo "</tr>";

          echo "<tr>";
  				echo "<td><h1>3. What type of payment cards can I use to pay?</h1></td>";
          echo "</tr>";

          echo "<tr>";
  				echo "<td><p>You can use a debit or credit card to pay for your shopping. We accept the following payment providers, issued by banks in Malaysia:</p></td>";
          echo "</tr>";

          echo "<tr>";
  			  echo "<ul>";
  				echo "<td><li>  Master</li></td>";
          echo "</tr>";

          echo "<tr>";
  				echo "<td><li>  Visa</li></td>";
          echo "</tr>";

          echo "<tr>";
  				echo "<td><li>  Debit Cards</li></td>";
          echo "</tr>";

  			  echo "</ul>";
  			  echo "<h2> ------------------------------------------------------------------------------------------------------- </h2>";
          echo "</tr>";

  	?>

  	<?php
  		echo "</form>";
  		echo "</div>";
      echo "</table>";
  	?>

  </body>
</html>
