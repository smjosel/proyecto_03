<meta http-equiv="content-type" content="text/html; charset=utf-8"/>

<link rel="stylesheet" type="text/css" href="./js/jquery.datetimepicker.css"/ >
<script src="./js/jquery.js"></script>
<script src="./js/build/jquery.datetimepicker.full.min.js"></script>

<?php
if(!empty($_SESSION['usuario'])) {	// Sesion de un usuario			
	$user=$_SESSION['idUser'];
} elseif(!empty($_SESSION['admin'])) {		//sesion de un administrador
	$user=$_SESSION['idUser'];
} else {
	?>
	<p>No estas logeado</p>
	<?php
}
?>
	<form action="pagina_reserva.proc.php" method="GET">
		<h3>Define el tiempo de tu reserva</h3>
		<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
		Fecha de inicio: <input type="text" name="fini" class="some_class" value="" id="fini"/>
		Fecha de devolución: <input type="text" name="ffin" class="some_class" value="" id="ffin"/>
		<script>
			jQuery.datetimepicker.setLocale('es');
			jQuery('#fini').datetimepicker({
			  format:'Y-m-d H:i:00'
			});
			jQuery('#ffin').datetimepicker({
			  format:'Y-m-d H:i:00'
			});
		</script>
		<input type="submit" value="Enviar">
	</form>
<?php
	// $hoy = date("Y-m-d H:i:s");
	// $conn=mysqli_connect('localhost','root','','bd_intranet');
	// $sql="UPDATE resources SET idEstado = 2 WHERE resources.idResource = $_REQUEST[id]";
	// //echo $sql;
	// //echo $_SESSION['resRecurso']."kjhsadkjfhksadjhfksajdfhksajdfh<br><br><br>";
	// $sql_i="INSERT INTO registers (idRegister, data_ini, data_fin, idResource, idUser) VALUES (NULL, '$hoy', NULL, '$_REQUEST[id]', '$user')";
	// //echo $sql_i;
	// $datos=mysqli_query($conn,$sql);
	// $datos2=mysqli_query($conn,$sql_i);
	// header("location:paginausuario_reservar.php");  

	// $hoy = date("Y-m-d H:i:s");
	// $conn=mysqli_connect('localhost','root','','bd_intranet');
	// $sql_o="SELECT * FROM registers WHERE idresource = $_SESSION[idrecurso] AND data_fin IS NULL";
	// $sql="UPDATE resources SET idEstado = 1 WHERE resources.idResource = $_SESSION[idrecurso]";
	// $datos3=mysqli_query($conn,$sql_o);
	// $datos=mysqli_query($conn,$sql);
	// $valorcito=mysqli_fetch_array($datos3);
	// $sql_i="UPDATE registers SET data_fin = '$hoy' WHERE registers.idRegister = $valorcito[idRegister]";
	// $datos2=mysqli_query($conn,$sql_i);
	// echo $sql."</br>".$sql_i;
	// unset($_SESSION['reserva']);
	// unset($_SESSION['idRecurso']);

	//header("location:paginausuario_reservar.php");
//header("location:paginausuario_reservar.php");


?>