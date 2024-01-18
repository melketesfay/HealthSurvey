<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="table.css">
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



    function onlySelected($var){
        return $var != "off";
    }

$finalArray = array_filter($associatedData,"onlySelected");

echo "<pre>";
// print_r($finalArray);

foreach ($finalArray as $key => $value) {
    if($value == "on"){
        $finalArray[$key] = "Ja";
    }
}
// print_r($finalArray);
 
    echo "<table id='customers'>  <tr>
    <th>Survey Frage</th>
    <th>Ihre Angabe</th>
    
  </tr> ";
foreach ($finalArray as $key => $value) {
    echo "<tr><td>".$key."</td>"."<td>".$value."</td></tr>";
}

echo "</tr></table>";

    
    ?>
</body>

</html>