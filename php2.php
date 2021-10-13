<?php 
    
$nombre = $_POST['nombre'];
$pswd = $_POST['pswd'];
$Cpswd = $_POST['Cpswd'];

$nombre1 = $_POST['nombre1'];
$pswd1 = $_POST['pswd1'];
$Cpswd1 = $_POST['Cpswd1'];
?>

<html>
    <head>
        <title></title>
        <style>
            form{   
                text-align:center;
                border:1px solid black;
                padding:5px;
                width:fit-content;
            }
        </style>
    </head>
    <body>
        <form action="phpFinal.php" method="POST">
            Nombre:<br><input type="text" name="nombre2" id="nombre2"/><br>
            Contraseña:<br><input type="password" name="pswd2" id="pswd2"/><br>
            CContraseña:<br><input type="password" name="Cpswd2" id="Cpswd2"/><br>
            
            <input hidden type="text" name="nombre1" id="nombre1" value="<?php echo $nombre1?>"/>
            <input hidden type="password" name="pswd1" id="pswd1" value="<?php echo $pswd1?>"/>
            <input hidden type="password" name="Cpswd1" id="Cpswd1" value="<?php echo $Cpswd1?>"/>
            
            <input hidden type="text" name="nombre" id="nombre" value="<?php echo $nombre?>"/>
            <input hidden type="password" name="pswd" id="pswd" value="<?php echo $pswd?>"/>
            <input hidden type="password" name="Cpswd" id="Cpswd" value="<?php echo $Cpswd?>"/>
            
            <leyend>Juegos que te gustan: </leyend><br>
                <label><input type="checkbox" name="games[]" value="COD">COD</label><br>
                <label><input type="checkbox" name="games[]" value="Minecraft">Minecraft</label><br>
                <label><input type="checkbox" name="games[]" value="Mario">Mario</label><br>
                <label><input type="checkbox" name="games[]" value="Tetris">Tetris</label><br>
                <label><input type="checkbox" name="games[]" value="GtaV">GtaV</label><br>
            <input type="submit" value="Submit"/>
            
        </form>
    </body>
</html>