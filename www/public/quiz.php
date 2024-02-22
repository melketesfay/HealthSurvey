<?php
if (session_status() === PHP_SESSION_NONE) {

    session_start();
}


include_once "database.php";




// für functionen diw mehr als 1 input möglichkeiten haben. Checks if the value is selected ans sets SESSION als sets SESSION of the option to off
function checkMultipleInput($input)
{
    foreach ($input as $inputValue) {
        if (isset($_GET[$inputValue])) {
            $_SESSION[$inputValue] = $_GET[$inputValue];
        } else {
            $_SESSION[$inputValue] = "off";
        }
    }
    return true;
}



//check at least one button is selected like isset for single choice questions

function test($input)
{
    $test = [];
    foreach ($input as $inputValue) {
        if (isset($_GET[$inputValue])) {
            array_push($test, true);
        }
    }
    if (count($test) > 0) {
        return true;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wireframe.css">
    <title>Document</title>
</head>

<body>

    <div class="form_container">
        <div class="form">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit="checkInput()" id="myForm" method="GET">
                <fieldset class='fieldset_question'>

                    <?php

                    // hier werden nacheiander die fragen neu gezeigt. Bedingung, dass die nächste Frage angezeigt wird ist, dass die Vorherige frage beantwortet worden ist

                    if (isset($_GET['start'])) {
                        $_SESSION['start'] = "User started Quiz";

                        echo $FORMELEMENTS[0];
                    }
                    if (isset($_GET['question_1'])) {
                        $_SESSION['question_1'] = $_GET['question_1'];
                        echo $FORMELEMENTS[1];
                    }


                    if (test($QUESTION_2)) {
                        checkMultipleInput($QUESTION_2);
                        echo $FORMELEMENTS[2];
                    }



                    if (isset($_GET['question_3'])) {
                        $_SESSION['question_3'] = $_GET['question_3'];
                        echo $FORMELEMENTS[3];
                    }

                    if (test($QUESTION_4)) {
                        checkMultipleInput($QUESTION_4);
                        echo $FORMELEMENTS[4];
                    }


                    if (isset($_GET['question_5'])) {
                        $_SESSION['question_5'] = $_GET['question_5'];
                        echo $FORMELEMENTS[5];
                    }
                    if (isset($_GET['question_6'])) {
                        $_SESSION['question_6'] = $_GET['question_6'];
                        echo $FORMELEMENTS[6];
                    }
                    if (isset($_GET['question_7'])) {
                        $_SESSION['question_7'] = $_GET['question_7'];
                        echo $FORMELEMENTS[7];
                    }
                    if (isset($_GET['question_8'])) {
                        $_SESSION['question_8'] = $_GET['question_8'];
                        echo $FORMELEMENTS[8];
                    }
                    if (isset($_GET['question_9'])) {
                        $_SESSION['question_9'] = $_GET['question_9'];
                        echo $FORMELEMENTS[9];
                    }
                    if (isset($_GET['question_10'])) {
                        $_SESSION['question_10'] = $_GET['question_10'];
                        header('Location: /results.php');
                    }


                    ?>
                    <!--  -->
                </fieldset>
                <fieldset class='fieldset_buttons'>
                    <button onclick='window.history.go(-1); return false;' class='previous_button'>Previous</button>
                    <input class='next_button' type='submit' value='Next' name="submit" onclick="return checkInput()" />
                </fieldset>

            </form>
        </div>

    </div>
    <script src='validate.js'></script>
</body>

</html>