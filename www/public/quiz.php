<?php
if (session_status() === PHP_SESSION_NONE) {
    // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
    session_start();
}
// foreach ($_SESSION as $key => $value) {
//     echo "<pre>";
//     echo $key . "=>" . $value;
// }
// print_r($_SESSION);

define("USERDATA",     []);

$USERDATA = ["Wie gesund bist du körperlich? ", "Nimmst du Nahrungsergänzungsmittel?", "Wie wichtig ist köperliche Aktivität für
dich?", "Welche zusätzliche körperliche Aktivität
betreibst du am meisten?", "Hast du das Gefühl, zu wenig, genügend
oder viel zu viel zusätzliche körperliche
Aktivitäten zu betreiben?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten
Kohlenhydrate?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten Protein?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten
Gemüse?", "An einem typischen Tag: Wie viele deiner
Malzeiten oder Snacks enthalten Früchte?", "An einem typischen Tag: Wie viele deiner
Malzeiten kommen aus der Mikrowelle
oder sind schon fertig zubereitet?"];


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


    <?php
    if (session_status() === PHP_SESSION_NONE) {
        // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
        session_start();
    }





    if (isset($_POST['question_1'])) {
        $_SESSION['number1'] = $_POST['question_1'];
        $page2 = $_SESSION['number1'];
        print_r($page2);
    }

    if (isset($_POST['question_2'])) {
        $_SESSION['number2'] = "page number 02";
        $page3 = $_SESSION['number2'];
    }

    if (isset($_POST['question_3'])) {
        $_SESSION['number3'] = "page number 03";
        $page4 = $_SESSION['number3'];
    }

    if (isset($_POST['question_4'])) {
        $_SESSION['number4'] = "page number 04";
        $page5 = $_SESSION['number4'];
    }


    ?>

    <!-- 

 -->

    <div class="form_container">
        <div class="form">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">






                <?php


                if (isset($_POST['start'])) {









                    echo "   <fieldset class='fieldset_question'>
  <label for='question_1'>$USERDATA[0]</label>
  </fieldset>
  <fieldset class='fieldset_input'>
  <input type='text' name='question_1' />
  </fieldset>
  <fieldset class='fieldset_buttons'>       
    <button class='previous_button'>Previous</button>
    <input class='next_button' type='submit' value='Next' />
  </fieldset>";
                } elseif (isset($_POST['question_1'])) {
                    echo "   <fieldset class='fieldset_question'>
    <label for='question_2'>$USERDATA[1]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_2' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button class='previous_button'>Previous</button>
    <input class='next_button' type='submit' value='Next' />
    </fieldset>";
                } elseif (isset($_POST['question_2'])) {

                    echo "   <fieldset class='fieldset_question'>
    <label for='question_3'>$USERDATA[2]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_3' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button class='previous_button'>Previous</button>
    <input class='next_button' type='submit' value='Next' />
    </fieldset>";
                } elseif (isset($_POST['question_3'])) {

                    echo "   <fieldset class='fieldset_question'>
    <label for='question_4'>$USERDATA[3]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_4' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button class='previous_button'>Previous</button>
    <input class='next_button' type='submit' value='Next' />
    </fieldset>";
                } elseif (isset($_POST['question_4'])) {
                    echo "   <fieldset class='fieldset_question'>
    <label for='question_5'>$USERDATA[4]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_5' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button class='previous_button'>Previous</button>
    <input class='next_button' type='submit' value='Next' />
    </fieldset>";
                } elseif (isset($_POST['question_5'])) {
                    echo "   <fieldset class='fieldset_question'>
    <label for='question_6'>$USERDATA[5]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_6' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button class='previous_button'>Previous</button>
    <input class='next_button' type='submit' value='Next' />
    </fieldset>";
                } elseif (isset($_POST['question_6'])) {
                    echo "   <fieldset class='fieldset_question'>
    <label for='question_7'>$USERDATA[6]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_7' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button class='previous_button'>Previous</button>
    <input class='next_button' type='submit' value='Next' />
    </fieldset>";
                } elseif (isset($_POST['question_7'])) {
                    echo "   <fieldset class='fieldset_question'>
    <label for='question_8'>$USERDATA[7]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_8' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button class='previous_button'>Previous</button>
    <input class='next_button' type='submit' value='Next' />
    </fieldset>";
                } elseif (isset($_POST['question_8'])) {
                    echo "   <fieldset class='fieldset_question'>
    <label for='question_9'>$USERDATA[8]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_9' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button class='previous_button'>Previous</button>
    <input class='next_button' type='submit' value='Next' />
    </fieldset>";
                } elseif (isset($_POST['question_9'])) {
                    echo "   <fieldset class='fieldset_question'>
    <label for='question_10'>$USERDATA[9]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_10' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button class='previous_button'>Previous</button>
    <input class='next_button' type='submit' value='Next' />
    </fieldset>";
                } elseif (isset($_POST['question_10'])) {
                    header('Location: /results.php');
                }





                ?>
            </form>
        </div>

    </div>














</body>

</html>