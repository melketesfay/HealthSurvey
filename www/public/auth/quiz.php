<?php
if (session_status() === PHP_SESSION_NONE) {
    // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
    session_start();
}
foreach ($_SESSION as $key => $value) {
    echo "<pre>";
    echo $key . "=>" . $value;
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


    <?php
    if (session_status() === PHP_SESSION_NONE) {
        // Startet die Session, bzw. stellt sie wieder her, falls vorhanden.
        session_start();
    }



    if (isset($_POST['number1'])) {
        $_SESSION['number1'] = "page number 01";
        $page2 = $_SESSION['number1'];
    }

    if (isset($_POST['number2'])) {
        $_SESSION['number2'] = "page number 02";
        $page3 = $_SESSION['number2'];
    }

    if (isset($_POST['number3'])) {
        $_SESSION['number3'] = "page number 03";
        $page4 = $_SESSION['number3'];
    }

    if (isset($_POST['number4'])) {
        $_SESSION['number4'] = "page number 04";
        $page5 = $_SESSION['number4'];
    }


    ?>


    <!-- <div class="container">
        <div class="form">
            <form action="" method="post">
                <fieldset class="fieldset_question">
                    <label for="question_1">first question</label>
                </fieldset>
                <fieldset class="fieldset_input">
                    <input type="text" name="question_1" />
                </fieldset>
                <fieldset class="fieldset_buttons">
                    <button>Previous</button>
                    <input type="submit" value="Next" />
                </fieldset>
            </form>
        </div>
    </div> -->




    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

        <?php


        if (isset($_POST['start'])) {



            echo "   <fieldset class='fieldset_question'>
          <label for='question_1'>first question</label>
          </fieldset>
          <fieldset class='fieldset_input'>
          <input type='text' name='question_1' />
          </fieldset>
          <fieldset class='fieldset_buttons'>       
            <button>Previous</button>
            <input type='submit' value='Next' />
          </fieldset>";
        } elseif (isset($_POST['number1'])) {
            echo "   <fieldset class='fieldset_question'>
            <label for='question_1'>first question</label>
            </fieldset>
            <fieldset class='fieldset_input'>
            <input type='text' name='question_1' />
            </fieldset>
            <fieldset class='fieldset_buttons'>       
              <button>Previous</button>
              <input type='submit' value='Next' />
            </fieldset>";
        } elseif (isset($_POST['number2'])) {

            echo "   <fieldset class='fieldset_question'>
            <label for='question_1'>first question</label>
            </fieldset>
            <fieldset class='fieldset_input'>
            <input type='text' name='question_1' />
            </fieldset>
            <fieldset class='fieldset_buttons'>       
              <button>Previous</button>
              <input type='submit' value='Next' />
            </fieldset>";
        } elseif (isset($_POST['number3'])) {

            echo "   <fieldset class='fieldset_question'>
            <label for='question_1'>first question</label>
            </fieldset>
            <fieldset class='fieldset_input'>
            <input type='text' name='question_1' />
            </fieldset>
            <fieldset class='fieldset_buttons'>       
              <button>Previous</button>
              <input type='submit' value='Next' />
            </fieldset>";
        } elseif (isset($_POST['number4'])) {
            echo "   <fieldset class='fieldset_question'>
            <label for='question_1'>first question</label>
            </fieldset>
            <fieldset class='fieldset_input'>
            <input type='text' name='question_1' />
            </fieldset>
            <fieldset class='fieldset_buttons'>       
              <button>Previous</button>
              <input type='submit' value='Next' />
            </fieldset>";
        }



        ?>
    </form>








</body>

</html>