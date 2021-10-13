<?php 
    
$nombre = $_POST['nombre'];
$pswd = $_POST['pswd'];
$Cpswd = $_POST['Cpswd'];
?>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
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
        
        <form action="php2.php" method="POST">
            Nombre:<br><input type="text" name="nombre1" id="nombre1"/><br>
            Contraseña:<br><input type="password" name="pswd1" id="pswd1"/><br>
            CContraseña:<br><input type="password" name="Cpswd1" id="Cpswd1"/><br>
            
            <input hidden type="text" name="nombre" id="nombre" value="<?php echo $nombre?>"/>
            <input hidden type="password" name="pswd" id="pswd" value="<?php echo $pswd?>"/>
            <input hidden type="password" name="Cpswd" id="Cpswd" value="<?php echo $Cpswd?>"/>
            
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>
