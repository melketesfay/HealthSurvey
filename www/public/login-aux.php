<?php

// check if session started if not starts new session
if (session_status() === PHP_SESSION_NONE) {
    // Starte die Session
    session_start();
}



// Login function
function login($username, $password)
{

    $users = [
        'Matilda' => 'matilda123',
        'melke' => 'melke123',
        'andres' => 'andres123'
    ];

    $keys = array_keys($users);

    if (in_array(
        $username,
        $keys
    ) && $users[$username] === $password) {

        print_r($username);
        print_r($password);
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        header('Location:/welcome_page.php');
        return TRUE;
    }

    header('Location:/index.php');
    echo "pasword fail";

    return false;
}

login($_POST["username"], $_POST["password"]);
