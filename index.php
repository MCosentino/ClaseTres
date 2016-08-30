<html>
<head>
	<title>Clase Tres</title>
</head>
<body>
	<form method="POST" action="destino.php">
		<input type="text" name="mensaje" >
		<input type="submit">

	</form>
</body>
</html>
<?php 
echo "<br> Muestro variable REQUEST <br>";
var_dump($_REQUEST);
echo "<br> Muestro variable GET <br>";
var_dump($_GET);
echo "<br> Muestro variable POST <br>";
var_dump($_POST);
echo "<br> Mustro variable del POST <br>";
if(isset($_POST['mensaje'])){
	echo $_POST['mensaje'];
}
else{
	echo"Primer ingreso";
}
?>