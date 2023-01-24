<?php
$nome= $_GET['nome'];
$email= $_GET['email'];
$passaword= $_GET['senha'];
$dat= $_GET['dat'];
$ida= $_GET['idade'];
$hora= $_GET['hora'];
$nivel= $_GET['nivel'];
$sexo= $_GET['sexo'];
$hobby= $_GET['hobby'];
$buscar= $_GET['buscar'];
$cidade= $_GET['cidade'];
$areatexto= $_GET['areatexto'];

include('menu.php');

echo "$nome <br>";
echo "$email<br>";
echo "$passaword<br>";
echo "$dat<br>";
echo "$ida<br>";
echo "$hora<br>";
echo "$nivel<br>";
echo "$sexo<br>";
echo "$hobby<br>";
echo "$buscar<br>";
echo "$cidade<br>";
echo "$areatexto<br>";

include('footer.php');
?>