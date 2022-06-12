<?php

session_start();

// 產生 token 並儲存於 session

$token = md5(uniqid(microtime(), true));

$_SESSION['security_token'] = $token;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>With security token</title>
</head>

<body>
    <h1>With security token</h1>

    <form action="process_form_without_token.php" method="post">
        <label for="username">帳號</label>
        <input type="text" name="username" />

        <br />

        <label for="username">密碼</label>
        <input type="password" name="password" id="password" />

        <!-- hidden value to send the security token to the server -->
        <input type="hidden" name="token" value="<?= $token; ?>" />

        <input type="submit" value="Login" />
    </form>
</body>

</html>