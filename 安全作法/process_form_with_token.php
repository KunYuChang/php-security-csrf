<?php

session_start();
$valid = FALSE;

// Check the token is present in the session and the POSTed values
if (isset($_SESSION['security_token']) && isset($_POST['token'])) {
    // Check they match
    if ($_SESSION['security_token'] == $_POST['token']) {
        $valid = TRUE;
    }
}

// Do not process the form if the token is invalid
if ($valid === FALSE) {
    exit("Invalid security token!\n");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Form results</title>
</head>

<body>
    <h1>Form results</h1>

    You submitted: <br>
    <p>
        <?php
        if (!empty($_POST)) {
            foreach ($_POST as $name => $value) {
                echo "$name = $value<br>";
            }
        }
        ?>
    </p>
</body>

</html>