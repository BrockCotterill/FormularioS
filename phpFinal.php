<?php


$nombres = [$_POST['nombre'],$_POST['nombre1'],$_POST['nombre2']];
$pswd = [$_POST['pswd'],$_POST['pswd1'],$_POST['pswd2']];
$Cpswd = [$_POST['Cpswd'],$_POST['Cpswd1'],$_POST['Cpswd2']];

echo "<table border='line'>";
echo "<tr><td>Nombre</td><td>Contraseña</td><td>CContraseña</td></tr>";
$nombres[2];
for($i = 0; $i < 3;$i++){
    echo "<tr>";
    echo "<td> ";
           echo $nombres[$i];
           echo "</td>"; 
    echo "<td> ";
           echo  $pswd[$i];
           echo "</td>"; 
    echo "<td>";
           echo  $Cpswd[$i];
           echo "</td>"; 
    echo "</tr>";
}
echo "</table>";

echo "Aqui son los jeugos seleccionados: ";
foreach($_POST['games'] as $seleccion) {
            echo"<br>";
            echo $seleccion . ' ';
        }