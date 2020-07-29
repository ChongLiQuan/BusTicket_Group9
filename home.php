
<?php include('header.php') ?>
<!-- content -->

<?php
echo "<div class='wrapper row2'>";
  echo "<div id='container' class='clear'>";

    echo "<section id='slider'><a href='allTicket.php'><img src='images/home.jpg' height='420' width='960' alt=''></a></section>";
    echo "<center> <img src='images/extra1.png'></center><br /><br />";

    echo "<div id='homepage'>";

      echo "<section id='services' class='clear'>";
        echo "<article class='one_quarter'>";
          echo "<strong>1. Flexibility</strong>";";";
          echo "<p>What if you are not able to travel as per the plan? Be wise, book on operators offering Cancellation or Reschedule policy and make your plans as flexible as you like.</p>";
        echo "</article>";
        echo "<article class='one_quarter'>";
          echo "<strong>2. E-Ticket</strong>";
          echo "<p>Mobile-Ticket SMS is enough for travelling. Go paperless and travel smart. Look for M-Ticket icon before selecting coach company.</p>";
        echo "</article>";
        echo "<article class='one_quarter'>";
          echo "<strong>3. Secure Payments</strong>";
          echo "<p>redBus has the highest security standards and keeps your information and purchases completely safe and secure.</p>";
        echo "</article>";
        echo "<article class='one_quarter lastbox'>";
          echo "<strong>4. Choice</strong>";
          echo "<p>130+ Coach companies and 4000+ Routes across Malaysia & Singapore. redBus is the world's largest online bus ticket booking platform trusted by millions of happy customers globally.</p>";
        echo "</article>";
      echo "</section>";

      echo "<section id='latest'>";
        echo "<article>";
          echo "<figure>";
            echo "<ul class='clear'>";
              echo "<li class='one_third'><img src='images/home1.png' width='290' height='180' alt=''></li>";
              echo "<li class='one_third'><img src='images/home3.png' width='290' height='180' alt=''></li>";
              echo "<li class='one_third lastbox'><img src='images/home2.png' width='290' height='180' alt=''></li>";
            echo "</ul>";
            echo "<figcaption><a href='#'>View All Our Recent Work Here &raquo;</a></figcaption>";
          echo "</figure>";
        echo "</article>";
      echo "</section>";

    echo "</div>";

    echo "<div id='content'>";
      echo "<section id='posts' class='last clear'>";
        echo "<ul>";
          echo "<li>";
            echo "<article class='clear'>";
              echo "<figure><img src='images/home4.png' height='130' width='180' alt=''>";
                echo "<figcaption>";
                  echo "<h2>Popular Bus Routes in Malaysia</h2>";
                  echo "<p>Some of the popular bus routes for booking bus tickets online in Malaysia include Kuala Lumpur to Singapore, Kuala Lumpur to Penang, and Klia2 to Klang. Travelers also like to take a bus from KL to Ipoh, KL to Genting Highlands, and KL to Melaka. With numerous pick-up and drop-off points available at each city in Malaysia, you can choose the best as per your convenience on the selected route.</a></p>";
                echo "</figcaption>";
              echo "</figure>";
            echo "</article>";
          echo "</li>";
          echo "<li class='last'>";
            echo "<article class='clear'>";
              echo "<figure><img src='images/home5.png' alt=''>";
                echo "<figcaption>";
                  echo "<h2>Top Bus Operators in Malaysia</h2>";
                  echo "<p>Bus operators like Transnasional, Aerobus, and KKKL Express are preferred by a number of travelers while booking a bus ticket online. Transnasional buses are available on routes like Kuala Lumpur to Kuantan, Malacca to Kuala Lumpur etc. KKKL Express buses</a>.</p>";
                echo "</figcaption>";
              echo "</figure>";
            echo "</article>";
          echo "</li>";
        echo "</ul>";
      echo "</section>";
    echo "</div>";

    echo "<aside id='right_column'>";
      echo "<h2 class='title'>Categories</h2>";
      echo "<nav>";
        echo "<ul>";
          echo "<li><a href='ticketDate.php'>To Check a Bus Ticket on a Date</a></li>";
          echo "<li><a href='allTicket.php'>Take a look at all Available Buses</a></li>";
          echo "<li><a href='signUp.php'>Sign Up and become a Member Today!</a></li>";
          echo "<li><a href='contactUs.php'>Contact Us if you any doubt!</a></li>";
          echo "<li><a href='myCart.php'>To check your Cart</a></li>";
          echo "<li class='last'><a href='Signin.php'>Sign In to book a Bus Ticket</a></li>";
        echo "</ul>";
      echo "</nav>";

    echo "</aside>";

  echo "</div>";
echo "</div>";
?>
<?php include('footer.php') ?>
