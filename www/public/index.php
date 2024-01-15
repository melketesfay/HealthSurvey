<?php

if (session_status() === PHP_SESSION_NONE) {
  // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
  session_start();
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>



  <form action="quiz.php" method="post">
    <?php

    $start = 1;
    if ($start == 1) {

      echo "<input type='text' name='start' id='name'>
      <input type='submit' value='start'>";
    }

    ?>
  </form>

  <?php
  if (isset($_POST['start'])) {
    $_SESSION['start'] = "startpage";

    $page = $_SESSION['start'];

    echo $page;


    // header('Location: /feedback.php');
  }



  ?>





</body>

</html>