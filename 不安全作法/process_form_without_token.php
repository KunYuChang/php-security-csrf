<!DOCTYPE html>
<html lang="en">

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