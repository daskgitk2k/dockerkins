<?php
$host = 'db';
$user = 'isma';
$password = 'isma';
$db = 'pruebas';

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    print "<svg height='20' width='20' >";
    print "  <circle cx='10' cy='10' r='5'  fill='red' />";
    print "</svg>";
} else {
    print "<svg height='20' width='20' >";
    print "  <circle cx='10' cy='10' r='5'  fill='green' />";
    print "</svg>";
}

print "<form action='insert.php' method='get'>";
print "<p>Eliga un usuario: <select name='nombre'></p>";
print "  <option value='Ismael'>ismael</option>";
print "  <option value='Bonet'>Bonet</option>";
print "  <option value='Alex'>Alex</option>";
print "  <option value='Juan'>Juan</option>";
print "</select>";
print 	"<p>Puntuación: <input type='number' name='puntos' value=0 min='0' max='10' /></p>";
print 	"<p><input type='submit' value='submit' />";
print "</form>";

?>
