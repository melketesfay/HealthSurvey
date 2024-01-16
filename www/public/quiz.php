<?php
if (session_status() === PHP_SESSION_NONE) {

    session_start();
}





define("USERDATA",     []);

$QUESTIONS = ["Wie gesund bist du körperlich? ", "Nimmst du Nahrungsergänzungsmittel?", "Wie wichtig ist köperliche Aktivität für
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


define("QUESTION_3", []);


$QUESTION_4 = ['question_4', 'question_4_1', 'question_4_2', 'question_4_3', 'question_4_4', 'question_4_5', 'question_4_6', 'question_4_6', 'question_4_7', 'question_4_8', 'question_4_9', 'question_4_10', 'question_4_10','question_4_11' ];



function checkMultipleInput($input)
{
    foreach ($input as $inputValue) {
        if (isset($_GET[$inputValue])) {
            $_SESSION[$inputValue] = $_GET[$inputValue];
        } else {
            $_SESSION[$inputValue] = "no Value given";
        }
    }
    return true;
}



function test($input)
{
    $test = [];
    foreach ($input as $inputValue) {
        if (isset($_GET[$inputValue])) {
            array_push($test, true);
        }
    }
    if (count($test)>0) {
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

                    if (isset($_GET['start'])) {
                        $_SESSION['start'] = "User started Quiz";

                        echo "   
                 
  <p for='question_1'>$QUESTIONS[0]</p>
  </fieldset>
  <fieldset class='fieldset_input'>
  <label for='question_1'>1:Überhaupt nicht gesund 5: Extrem Gesund</label>
  <input type='range' min='1' max='5' value='3' class='slider' id='myRange' name='question_1'>
  
 

   ";
                    }
                    if (isset($_GET['question_1'])) {
                        $_SESSION['number1'] = $_GET['question_1'];
                        echo "   
    <p for='question_2'>$QUESTIONS[1]</p>
    </fieldset>
    <fieldset class='fieldset_input' >
    <label for='question_2'>ja</label>

    <input type='radio'  name='question_2' />
    <label for='question_2_1'>nein</label>
    <input type='radio'  name='question_2_1' />
   
    
    ";
                    }
                    if (isset($_GET['question_2']) || isset($_GET['question_2_1'])) {
                        $_SESSION['number2'] = $_GET['question_2'] ?? $_GET['question_2_1'];
                        echo "   
    <p for='question_3'>$QUESTIONS[2]</p>
    </fieldset>
    <fieldset class='fieldset_input'>
    
    <label for='question_3'>1:Überhaupt nicht wichtig 5: Sehr Wichtig</label>
    <input type='range' min='1' max='5' value='3' class='slider' id='myRange' name='question_3'>




   
  
    ";

                        // Keine zusätzliche körperliche Aktivität /
                        // Gewichte heben / Gehen / Wandern / Joggen /
                        // Rennen / Schwimmen / Tanzen / Aerobics /
                        // Pilates / Team Sport / Andere (Radio Buttons
                        // oder Checkboxen; “Andere” zusätzlich mit
                        // einzeiligem Eingabefeld; OK-Button)

                    }
                    if (isset($_GET['question_3'])) {
                        $_SESSION['number3'] = $_GET['question_3'];
                        echo "  
    <p for='question_4'>$QUESTIONS[3]</p>
    </fieldset>
    <fieldset class='fieldset_input'>
    <label for='question_4'>Keine zusätzliche körperliche Aktivität</label>

    <input type='radio'  name='question_4' />
    <label for='question_4_1'>Gewichte heben</label>
    <input type='radio'  name='question_4_1' />
    <label for='question_4_2'>Gehen</label>
    <input type='radio'  name='question_4_2' />
    <label for='question_4_4'>Wandern</label>
    <input type='radio'  name='question_4_4' />
    <label for='question_4_4'>Joggen</label>
    <input type='radio'  name='question_4_4' />
    <label for='question_4_5'>Rennen</label>
    <input type='radio'  name='question_4_5' />
    <label for='question_4_6'>Schwimmen</label>
    <input type='radio'  name='question_4_6' />
    <label for='question_4_7'>Tanzen</label>
    <input type='radio'  name='question_4_7' />
    <label for='question_4_8'>Aerobics</label>
    <input type='radio'  name='question_4_8' />
    <label for='question_4_9'>Pilates</label>
    <input type='radio'  name='question_4_9' />
    <label for='question_4_10'>Team Sport</label>
    <input  type='radio'  name='question_4_10' />
    <label for='question_4_11'>Andere</label>
    <input type='checkbox'  name='question_4_11' />
    
    
   ";
                    }

                    if (test($QUESTION_4)) {
                        checkMultipleInput($QUESTION_4);
                        echo "   
                        <p for='question_5'>$QUESTIONS[4]</p>
                        </fieldset>
                        <fieldset class='fieldset_input'>
                        <label for='question_5'>1:Zu wenig 5: Zu viel</label>
                        <input type='range' min='1' max='5' value='3' class='slider' id='myRange' name='question_5'>

                         ";
                    }


                    if (isset($_GET['question_5'])) {
                        $_SESSION['number5'] = $_GET['question_5'];
                        echo "   
    <p for='question_6'>$QUESTIONS[5]</p>
    </fieldset>
    <fieldset class='fieldset_input'>
    <label for='question_6'>Gib eine zahl ein</label>
    <input type='number' name='question_6' />
   
  ";
                    }
                    if (isset($_GET['question_6'])) {
                        $_SESSION['number6'] = $_GET['question_6'];
                        echo "   
    <p for='question_7'>$QUESTIONS[6]</p>
    </fieldset>
    <fieldset class='fieldset_input'>
    <label for='question_7'>Gib eine zahl ein</label>
    <input type='number' name='question_7' />
   
    ";
                    }
                    if (isset($_GET['question_7'])) {
                        $_SESSION['number7'] = $_GET['question_7'];
                        echo "   
    <p for='question_8'>$QUESTIONS[7]</p>
    </fieldset>
    <fieldset class='fieldset_input'>
    <label for='question_8'>Gib eine zahl ein</label>
    <input type='number' name='question_8' />
      
    
    ";
                    }
                    if (isset($_GET['question_8'])) {
                        $_SESSION['number8'] = $_GET['question_8'];
                        echo "  
    <p for='question_9'>$QUESTIONS[8]</p>
    </fieldset>
    <fieldset class='fieldset_input'>
    <label for='question_9'>Gib eine zahl ein</label>
    <input type='number' name='question_9' />
      
    
   ";
                    }
                    if (isset($_GET['question_9'])) {
                        $_SESSION['number9'] = $_GET['question_9'];
                        echo "   
    <p for='question_10'>$QUESTIONS[9]</p>
    </fieldset>
    <fieldset class='fieldset_input'>
    <label for='question_10'>Gib eine zahl ein</label>
    <input type='number' name='question_10' />
          
    
  ";
                    }
                    if (isset($_GET['question_10'])) {
                        $_SESSION['number10'] = $_GET['question_10'];
                        header('Location: /results.php');
                    }


                    ?>
                    <!--  -->
                </fieldset>
                <fieldset class='fieldset_buttons'>
                    <button onclick='window.history.go(-1); return false;' class='previous_button'>Previous</button>
                    <input class='next_button' type='submit' value='Next' name="submit" onclick="return checkInput()"/>
                </fieldset>

            </form>
        </div>

    </div>
    <script src='validate.js'></script>
</body>

</html>