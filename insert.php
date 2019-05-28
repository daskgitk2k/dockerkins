<?php
function recoge($var){
if (isset($_REQUEST[$var]))
$tmp= trim(htmlspecialchars($_REQUEST[$var], ENT_QUOTES, "UTF-8"));
else
	$tmp= "";
return $tmp;}

$nombre = recoge("nombre");
$puntos = recoge("puntos");
$ismael=0;
$bonet=0;

#-----------------------------SQL-------------------------
$conn = mysqli_connect( 'db','isma','isma','pruebas');

if ($nombre == 'Ismael') {
#---------Ismael
	$sql_Ismael = "Select puntos From usuarios Where nombre='Ismael'";
	$result_Ismael = mysqli_query( $conn, $sql_Ismael);
	$rows_Ismael = mysqli_fetch_array( $result_Ismael, MYSQLI_ASSOC);
	$puntuacion_Ismael=$rows_Ismael['puntos']; #puntos sin actualizar 
	$ismael=$puntuacion_Ismael+$puntos; #puntos actualizados
	$update = "update usuarios set puntos=$ismael where nombre='$nombre'";
} else if ($nombre == 'Bonet') {
#---------Bonet
	$sql_Bonet = "Select puntos From usuarios Where nombre='Bonet'";
	$result_Bonet = mysqli_query( $conn, $sql_Bonet);
	$rows_Bonet = mysqli_fetch_array( $result_Bonet, MYSQLI_ASSOC);
	$puntuacion_Bonet=$rows_Bonet['puntos'];
	$bonet=$puntuacion_Bonet+$puntos;
	$update = "update usuarios set puntos=$bonet where nombre='$nombre'";
}
$return = mysqli_query ( $conn, $update);
#---------------------------------------------------------------
$sql_Ismael = "Select puntos From usuarios Where nombre='Ismael'";
	$result_Ismael = mysqli_query( $conn, $sql_Ismael);
	$rows_Ismael = mysqli_fetch_array( $result_Ismael, MYSQLI_ASSOC);
	$puntuacion_Ismael=$rows_Ismael['puntos']; 

	$sql_Bonet = "Select puntos From usuarios Where nombre='Bonet'";
	$result_Bonet = mysqli_query( $conn, $sql_Bonet);
	$rows_Bonet = mysqli_fetch_array( $result_Bonet, MYSQLI_ASSOC);
	$puntuacion_Bonet=$rows_Bonet['puntos'];

print "<p>Ismael</p>";
print "<svg width='8cm' height='4cm' viewBox='100 150 800 300' >";
print "    <defs>";
print "     <linearGradient id='MyGradient'>";
print "        <stop offset='$puntuacion_Ismael%' stop-color='green' />";
print "        <stop offset='0%' stop-color='red' />";
print "      </linearGradient>";
print "    </defs>";
print "    <rect fill='url(#MyGradient)' stroke='black' stroke-width='5' x='100' y='100' width='600' height='200'/>";
print "</svg>";
print "<p>Puntuación Ismael: $puntuacion_Ismael</p>";

print "<p>Bonet</p>";
print "<svg width='8cm' height='4cm' viewBox='100 150 800 300' >";
print "    <defs>";
print "     <linearGradient id='MyGradient2'>";
print "        <stop offset='$puntuacion_Bonet%' stop-color='green' />";
print "        <stop offset='0%' stop-color='red' />";
print "      </linearGradient>";
print "    </defs>";
print "    <rect fill='url(#MyGradient2)' stroke='black' stroke-width='5' x='100' y='100' width='600' height='200'/>";
print "</svg>";
print "<p>Puntuación Bonet: $puntuacion_Bonet</p>";



mysqli_close( $conn);
?>

<p><a href='index.php'>Volver al formulario</a></p>
