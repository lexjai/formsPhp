<?php
echo "Formularios:Ejercicios.PHP";

echo "<h1>Datos personales</h1>";

echo "su nombre es". $_POST["name"]."<br>";
echo "su Apellido es". $_POST["lname"]."<br>";
echo "es: ". $_POST["sexo"]."<br>";
echo "su estado civil ";
echo ($_POST["estado"] == "Otro") ? 'no es  <strong>ni Solteo ni Casado</strong>': 'es: '. $_POST["estado"];
echo "<br>";
echo "Le gusta: ";
if($_POST["list"]){
foreach($_POST["list"] as $value){
    echo "<strong> $value </strong>".",";
}
}else{
    echo "<p style='color red'> no selecciono nada </p>";
}

echo "<br>";
echo "<a href='../datos.html'>Volver al Formulario </a>";