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
foreach($_POST["list"] as $value){
    echo "<strong> $value </strong>".",";
}
echo "<br>";
echo "<a href='../datos.html'>Volver al Formulario </a>";