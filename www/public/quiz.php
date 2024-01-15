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
if (isset($_GET["btn"])) {
    $_SESSION['start'] = "User started Quiz";
}



echo $_SESSION["start"];

print_r($_SESSION);

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





    if (isset($_GET['question_1'])) {
        $_SESSION['number1'] = $_GET['question_1'];
        $page2 = $_SESSION['number1'];
        print_r($page2);
    }

    if (isset($_GET['question_2'])) {
        $_SESSION['number2'] = $_GET['question_2'];
        $page3 = $_SESSION['number2'];
    }

    if (isset($_GET['question_3'])) {
        $_SESSION['number3'] = $_GET['question_3'];
        $page4 = $_SESSION['number3'];
    }

    if (isset($_GET['question_4'])) {
        $_SESSION['number4'] = $_GET['question_4'];
        $page5 = $_SESSION['number4'];
    }


    ?>


    <div class="form_container">
        <div class="form">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
                <fieldset class='fieldset_question'>

                    <?php

                    if (isset($_GET['start'])) {
                    

                        echo "   
                 
  <label for='question_1'>$USERDATA[0]</label>
  </fieldset>
  <fieldset class='fieldset_input'>
  <input type='text' name='question_1' />
  </fieldset>
  <fieldset class='fieldset_buttons'>       
  <button onclick='window.history.go(-1); return false;' class='previous_button'>Previous</button>
   ";
                    }
                  if(isset($_GET['question_1'])){

                        echo "   
    <label for='question_2'>$USERDATA[1]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_2' />
    </fieldset>
    <fieldset class='fieldset_buttons'>     
    <button onclick='window.history.go(-1); return false;' class='previous_button'>Previous</button>
    
    ";
                    }
                    if (isset($_GET['question_2'])) {

                        echo "   
    <label for='question_3'>$USERDATA[2]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_3' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button onclick='window.history.go(-1); return false;' class='previous_button'>Previous</button>
    ";
                    }
                    if (isset($_GET['question_3'])) {

                        echo "  
    <label for='question_4'>$USERDATA[3]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_4' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button onclick='window.history.go(-1); return false;' class='previous_button'>Previous</button>
   ";
                    }
                    if (isset($_GET['question_4'])) {
                        echo "   
    <label for='question_5'>$USERDATA[4]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_5' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button onclick='window.history.go(-1); return false;' class='previous_button'>Previous</button>
    ";
                    }
                    if (isset($_GET['question_5'])) {
                        echo "   
    <label for='question_6'>$USERDATA[5]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_6' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button onclick='window.history.go(-1); return false; 'class='previous_button'>Previous</button>
  ";
                    }
                    if (isset($_GET['question_6'])) {
                        echo "   
    <label for='question_7'>$USERDATA[6]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_7' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button onclick='window.history.go(-1); return false; 'class='previous_button'>Previous</button>
    ";
                    }
                    if (isset($_GET['question_7'])) {
                        echo "   
    <label for='question_8'>$USERDATA[7]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_8' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button onclick='window.history.go(-1); return false; 'class='previous_button'>Previous</button>
    ";
                    }
                    if (isset($_GET['question_8'])) {
                        echo "  
    <label for='question_9'>$USERDATA[8]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_9' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button onclick='window.history.go(-1); return false;' class='previous_button'>Previous</button>
   ";
                    }
                    if (isset($_GET['question_9'])) {
                        echo "   
    <label for='question_10'>$USERDATA[9]</label>
    </fieldset>
    <fieldset class='fieldset_input'>
    <input type='text' name='question_10' />
    </fieldset>
    <fieldset class='fieldset_buttons'>       
    <button onclick='window.history.go(-1); return false;' class='previous_button'>Previous</button>
  ";
                    }
                    if (isset($_GET['question_10'])) {
                        header('Location: /results.php');
                    }


                    ?>
                    <!--  -->
                    <input class='next_button' type='submit' value='Next' name="submit"/>
                </fieldset>

            </form>
        </div>

    </div>



    <?php print_r($_SESSION); ?>






<script>
    function myFunction(){
        window.history.go(-1);
    }
</script>



</body>

</html>