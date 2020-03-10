<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <title>Title</title>
</head>
<body>
<div id="central">
    <div style="position: relative;">
        <form method="post" action="index.php">
            <div style="width: 100%;height: 100%;position: relative;">
                <div id="around_form">
                    Login<input type="text" name="log" id="loginText"><span id="btnCheck">check</span>
                    Parol<input type="password" name="pas" id="bb">
                    <input type="submit" value="Авторизуватись">
                </div>

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