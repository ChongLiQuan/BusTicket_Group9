
<?php include('header.php') ?>

<?php
echo "<center>";

if(isset($_POST['submitted'])) {
  setcookie('font_size', $_POST['font_size']);
  setcookie('background', $_POST['background']);

  $msg = '<p>Your settings have been entered! Click <a href ="contactus.php">here</a> to see them in actions. </p>';

}

if(isset($_POST['submitted2'])) {
  setcookie('country', $_POST['country']);
  setcookie('language', $_POST['language']);
  setcookie('currency', $_POST['currency']);

  $msg = '<p>Your settings have been entered! Click <a href ="home.php">here</a> to see them in actions. </p>';

  }

  //Message to print later

if(isset($_POST['submitted3'])) {
  setcookie('font_size', 'medium');
  setcookie('background', '#F09090');

  $msg = '<p>Your settings have been reset! Click <a href ="setting.php">here</a> to see them in actions. </p>';

}

?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Customize Your Setting</title>
</head>

</body>
  <?php
  if(isset($msg)) {
    print $msg;
  }
  ?>
<br /><br /><center>
  <img src="images/setting.png" height="150" width="150">
  <h5>User Settings</h5>
  <hr size='2'><br /><br />
  <h3>1. Change to your own unique taste of layout below!</p>
  <form action="setting.php" method="post">
  <select name="font_size">
      <option value=" ">Font Size</option>
      <option value="x-small">X-Small</option>
      <option value="small">Small</option>
      <option value="medium">Medium</option>
      <option value="large">Large</option>
      <option value="x-large">X-Large</option>

</select>

<select name="background">
    <option value="gray">Gray</option>
    <option value="green">Green</option>
    <option value="blue">Blue</option>
    <option value="pink">Pink</option>
    <option value="brown">Brown</option>
    <option value="yellow">Yellow</option>
    <option value="orange">Orange</option>
</select>

<p><input type="submit" name="submit" value="Set my Preferences!" /></p><hr size='1'><br />
<input type="hidden" name="submitted" value="true" />

</form>

<p>2. Use this form to set your preferences:</p>
<form action="setting.php" method="post">
<select name="country">
    <option value=" ">Country</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Singapore">Singapore</option>
</select>

<select name="language">
  <option value="Mandarin">Mandarin</option>
  <option value="English">English</option>
</select>

<select name="currency">
  <option value=" ">Currency</option>
  <option value="MYR">MYR</option>
  <option value="SGD">SGD</option>
  <option value="YUAN">YUAN</option>
</select>

<p><input type="submit" name="submit" value="Set my Preferences!" /></p><hr size='1'><br />
<input type="hidden" name="submitted2" value="true" />
</form>

<form action="setting.php" method="post">
<p>Want to reset back all your setting ?</p></h3>
<p><input type="submit" name="submit" value="Reset All My Settings!!" /></p>
<input type="hidden" name="submitted3" value="true" />
</form><br />
<hr size='2'>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<?php include('footer.php') ?>
