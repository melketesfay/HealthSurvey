<?php
if (session_status() === PHP_SESSION_NONE) {
    // Starte die Session
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="wireframe.css">
</head>

<body>
    <div class="form_container">
        <div class="wellcome_message form_index">
            <div class="div_welcome_text">
                <h1>Wellcome <?php echo $_SESSION['username'];  ?></h1>
                <p>Thrilled to have you on board! <span style="font-size: 1.5em;">🌟</span> Let's kickstart your health journey. Your well-being is our focus, and this survey is your first step in understanding and optimizing your health.</p>

                <p>📋 Answer our thoughtful survey questions, and unlock personalized recommendations. Empower yourself with informed choices and take control of your well-being.</p>

                <p>Your health is in your hands. Together, let's work towards a healthier, happier you! Questions or need assistance? We're here for you.</p>

                <p>Cheers to your health and wellness! <span style="font-size: 1.5em;">🌈</span> The Health Survey Team</p>
            </div>
        </div>
        <div class="c_wellcome_button">
            <div class="wellcome_button ">
                <form action="index.php" method="get">
                    <input type="submit" class="previous_button" name="start" value="back">
                </form>
            </div>
            <div class="wellcome_button ">
                <form action="quiz.php" method="get">
                    <input type="submit" class="next_button" name="start" value="to quiz">
                </form>
            </div>
        </div>

    </div>


    <!-- <div class="form_container">
      <div class="form">
      <form method="post" action="./login-aux.php">
      <fieldset class="login_fieldset">
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="username">
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="password">
      </fieldset>
      <fieldset class="fieldset_buttons_login">  
        <input class="next_button"type="submit" value="Login" />
       </fieldset> 
      </form>

      </div>
    </div> -->

</body>

</html>