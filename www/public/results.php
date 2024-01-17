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

$associatedData = [];

    foreach ($QUESTIONDATABASE as $key) {

array_push($associatedData,)
        
    }


    ?>
</body>

</html>