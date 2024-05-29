<?php
    $cookie_name = "user";
    $cookie_value = "arianit tershnjaku";
    setcookie($cookie_name, $cookie_value, time() + 10, "/");

    if(!isset($_COOKIE[$cookie_name]))
    {
        echo "cookie'". $cookie_name . "' is not set!";

    }
    else
    {
        echo "cookie'" . $cookie_name . "' is set!<br>";
        echo "value is: " .$_COOKIE[$cookie_name];

    }
    ?>