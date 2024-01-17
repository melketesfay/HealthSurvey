<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hallo This is your health survey</h1>
    <?php

    include_once "database.php";

    if (session_status() === PHP_SESSION_NONE) {

        session_start();
    }
    // // echo "<pre>";
    // // print_r($_SESSION);


    // foreach ($DATA as $key) {
    //     echo $key . "<br>";
    // }

    // ksort($_SESSION);

    // print_r($_SESSION);

    $associatedData = [];

    foreach ($QUESTIONDATABASE as $key) {
        $index = array_search($key, $QUESTIONDATABASE);


        $associatedData[$DATA[$index]] = $_SESSION[$key];
    }

    for ($i = 0; $i < 22; $i++) {
        $associatedData[$DATA[$i]] = $_SESSION[$QUESTIONDATABASE[$i]];
    }


    echo "<h1>Hallo User<h1><h2>Das sind Ihre Angaben</h2><ul style='display:flex;'>";

    foreach ($associatedData as $key => $value) {
        echo " 
        
         <li>$key => $value</li>
        
        ";
    }
    echo "</ul>";
    ?>
</body>

</html>