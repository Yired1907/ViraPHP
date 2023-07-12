<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    //Session
    // to change a session variable, just overwrite it
    $_SESSION["favcolor"] = "yellow";
    print_r($_SESSION);


    echo "<br>";
    //Filters
    $int = 100;
    echo "$int: ";
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo ("Integer is valid");
    } else {
        echo ("Integer is not valid");
    }

    echo "<br>";
    $ip = "127.0.0.1";

    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
        echo ("$ip is a valid IP address");
    } else {
        echo ("$ip is not a valid IP address");
    }

    echo "<br>";
    $email = "thanhqui19072000@gmail.com";

    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo ("$email is a valid email address");
    } else {
        echo ("$email is not a valid email address");
    }


    echo "<br>";
    $url = "https://www.youtube.com/watch?v=f02mOEt11OQ";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
        echo ("$url is a valid URL");
    } else {
        echo ("$url is not a valid URL");
    }
    ?>

</body>

</html>