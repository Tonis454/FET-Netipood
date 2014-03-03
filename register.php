<!DOCTYPE html>
<html>
<head>
    <title>Veebipood</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>

<div class="wrapper">
    <span style="padding-left: 800px;"><a style="text-decoration: none;color: black" href="login.php">Logi sisse</a> | <a style="text-decoration: none;color: black" href="register.php"> Registreeri</a></span>
<?php include("includes/header.php")?>
<?php include("includes/left.php")?>
    <div class="right">

        <h3>Registreeri kasutajaks</h3><br>
        <form>
            Kasutajanimi: <input type="text" name="Username"><br>
            <span style="padding-right: 39px;">Parool: </span><input type="password" name="pwd">
        </form>
        <form>
            <input type="checkbox" name="rpwd" value="rpwd">Salvesta parool<br>
        </form><br>
        <form name="input" action="#" method="get">
            <input type="submit" value="Registreeri">
        </form>

    </div>
<?php include("includes/footer.php")?>
</div>
</body>
</html>