<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <title>Title</title>
</head>
<body>
<div id="central">

        <div id="central2">
        <form method="post" action="index.php">
            <div style="width: 100%;height: 100%;position: relative;">
                    <div style="font-size: 1.2em;">Login</div><input type="text" name="log" id="loginText"><span id="btnCheck">check</span>
                <div style="font-size: 1.2em;">Password</div><input type="password" name="pas" id="bb">
                <br>
                <br>
                    <input type="submit" value="Авторизуватись" id="submit">
            </div>
        </form>
        </div>
</div>

</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/script.js" defer></script>
</html>

<?php
if (isset($_GET['er'])&&$_GET['er']!=''){ ; echo "<script> alert('NEVIRNO'); window.location = 'login.php'; </script>";}