<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Name</title>
</head>
<body>
    <p>Nom anterior:</p>
    <!--variable con el nombre con las <b>-->
    <p>Escriu el teu nom:</p>
    <form action="accion.php" method="post">
        <p><b>Nom:</b> <input type="text" name="nombre" /></p>
        <p><input type="submit"/> <input type="reset"></p> <!--onclick-->
    </form>
    <?php
        echo '<a href="index.php">Inici</a>';
        ?>
    
</body>
</html>