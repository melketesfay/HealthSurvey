<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8e475b60fe.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="table.css">
    <title>Document</title>
</head>

<body>

    <div class="container">



        <?php

        include_once "database.php";

        if (session_status() === PHP_SESSION_NONE) {

            session_start();

            if (isset($_GET['logout'])) {
                session_unset();
                session_destroy();
                header('location: /index.php');
            }
        }
        echo "<h2>Hallo " . $_SESSION['username'] . "</h2>";
        echo "<h2>Das sind Ihre Angaben</h2>";

        $associatedData = [];

        // foreach ($QUESTIONDATABASE as $key) {
        //     $index = array_search($key, $QUESTIONDATABASE);

        //     $associatedData[$DATA[$index]] = $_SESSION[$key];
        // }

        for ($i = 0; $i < 22; $i++) {
            $associatedData[$DATA[$i]] = $_SESSION[$QUESTIONDATABASE[$i]];
        }



        function onlySelected($var)
        {
            return $var != "off";
        }

        $finalArray = array_filter($associatedData, "onlySelected");


        // print_r($finalArray);

        foreach ($finalArray as $key => $value) {
            if ($value == "on") {
                $finalArray[$key] = "Ja";
            }
        }
        // print_r($finalArray);

        echo "<table id='customers'>  <tr>
    <th>Survey Frage</th>
    <th>Ihre Angabe</th>
    
  </tr> ";
        foreach ($finalArray as $key => $value) {
            echo "<tr><td>" . $key . "</td>" . "<td>" . $value . "</td></tr>";
        }

        echo "</tr></table>";


        // Bewertung

        // check how many aktivities where selected
        $koerperlicheAktivität = [];

        foreach ($QUESTION_4 as $key) {
            $koerperlicheAktivität[$key] = $_SESSION[$key];
        }
        array_shift($koerperlicheAktivität);


        $koerperlicheAktivität = array_filter($koerperlicheAktivität, "onlySelected");
        // print_r($koerperlicheAktivität);
        $anzahlAktivities = count($koerperlicheAktivität);
        $frage3 = $_SESSION["question_3"];
        $Kohlenhydrate = $_SESSION["question_6"];
        $proteine = $_SESSION["question_7"];
        $gemüse = $_SESSION["question_8"];
        $früchte = $_SESSION["question_9"];

        function gesundheitBewertung()
        {

            // Bewertungsparameter

            // check how many aktivities where selected
            // $koerperlicheAktivität = [];



            $frage3 = $_SESSION["question_3"];
            $Kohlenhydrate = $_SESSION["question_6"];
            $proteine = $_SESSION["question_7"];
            $gemüse = $_SESSION["question_8"];
            $früchte = $_SESSION["question_9"];

            $gesund = "<p> Toll! du bist gesund. </p> <i class='fa-solid fa-thumbs-up' ></i>";
            $ungesund = "<p> Fang lieber gesund zu leben bevor es zu spät ist. </p><i class='fa-solid fa-thumbs-down' ></i>";

            if (intval($frage3) >= 3 && intval($GLOBALS["anzahlAktivities"]) > 0 && intval($Kohlenhydrate) >= 2 && intval($proteine) >= 2 && intval($gemüse) > 0 && intval($früchte) > 0) {
                echo $gesund;
            } else {
                echo $ungesund;
            }
            echo "<br>";
        }


        echo "<h2>Bewertung</h2><div class='bewertung'>";

        gesundheitBewertung();



        echo "</div >";

        // Berechnung: Schwellenwerte für “gesund” (mittlere Wichtigkeit bei Frage 3 sowie mindestens
        // eine zusätzliche körperliche Aktivität, dazu ausgeglichene Ernährung mit mind. 2x
        // Kohlenhydrate, 2x Protein, 1x Gemüse, 1x Früchte); “ungesund” unterhalb dieser
        // Schwellen

        ?>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
            <input type="submit" value="log out" name="logout">
            <button onclick='window.history.go(-10); return false;' value="Wiederholen">Wiederholen</button>
        </form>
    </div>
</body>

</html>