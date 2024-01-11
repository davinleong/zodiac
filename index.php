<?php $title = "Zodiac Calculator"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
</head>

<body>
  <h1>Davin Leong</h1>

  <form action="index.php" method="post">
    <label for="year">Year: </label>
    <input type="number" name="year"> <br/><br/>
    <input type="submit" value="Get Zodiac">
    <input type="reset" value="Clear">
  </form>

  <br />

  <!-- zodiac array -->
  <?php
  session_start(); // Start the session at the beginning of the file

  $zodiac = array(
    "Monkey",
    "Rooster",
    "Dog",
    "Pig",
    "Rat",
    "Ox",
    "Tiger",
    "Rabbit",
    "Dragon",
    "Snake",
    "Horse",
    "Goat"
  );

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST["year"];
    if ($year < 1900 || $year > 2025) {
      echo "Year must be between 1900 and next year. Please try again.";
    } else {
      $remainder = $year % 12;
      echo "<img src='images/" . $zodiac[$remainder] . ".png' alt='zodiac image'>";
      echo "<br>You were born in the year of the " . $zodiac[$remainder] . ".";
    }
  }
  ?>



</body>

</html>