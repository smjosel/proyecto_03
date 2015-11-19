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
<script>/*
window.onerror = function(errorMsg) {
	$('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('en');

$('#datetimepicker_format').datetimepicker({value:'2015/04/15 05:03', format: $("#datetimepicker_format_value").val()});
$("#datetimepicker_format_change").on("click", function(e){
	$("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({format: $("#datetimepicker_format_value").val()});
});
$("#datetimepicker_format_locale").on("change", function(e){
	$.datetimepicker.setLocale($(e.currentTarget).val());
});

$('#datetimepicker').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:	'1986/01/05'
});
$('#datetimepicker').datetimepicker({value:'2015/04/15 05:03',step:10});

$('.some_class').datetimepicker();

$('#default_datetimepicker').datetimepicker({
	formatTime:'H:i',
	formatDate:'d.m.Y',
	//defaultDate:'8.12.1986', // it's my birthday
	defaultDate:'+03.01.1970', // it's my birthday
	defaultTime:'10:00',
	timepickerScrollbar:false
});

$('#datetimepicker10').datetimepicker({
	step:5,
	inline:true
});
$('#datetimepicker_mask').datetimepicker({
	mask:'9999/19/39 29:59'
});

$('#datetimepicker1').datetimepicker({
	datepicker:false,
	format:'H:i',
	step:5
});
$('#datetimepicker2').datetimepicker({
	yearOffset:222,
	lang:'ch',
	timepicker:false,
	format:'d/m/Y',
	formatDate:'Y/m/d',
	minDate:'-1970/01/02', // yesterday is minimum date
	maxDate:'+1970/01/02' // and tommorow is maximum date calendar
});
$('#datetimepicker3').datetimepicker({
	inline:true
});
$('#datetimepicker4').datetimepicker();
$('#open').click(function(){
	$('#datetimepicker4').datetimepicker('show');
});
$('#close').click(function(){
	$('#datetimepicker4').datetimepicker('hide');
});
$('#reset').click(function(){
	$('#datetimepicker4').datetimepicker('reset');
});
$('#datetimepicker5').datetimepicker({
	datepicker:false,
	allowTimes:['12:00','13:00','15:00','17:00','17:05','17:20','19:00','20:00'],
	step:5
});
$('#datetimepicker6').datetimepicker();
$('#destroy').click(function(){
	if( $('#datetimepicker6').data('xdsoft_datetimepicker') ){
		$('#datetimepicker6').datetimepicker('destroy');
		this.value = 'create';
	}else{
		$('#datetimepicker6').datetimepicker();
		this.value = 'destroy';
	}
});
var logic = function( currentDateTime ){
	if (currentDateTime && currentDateTime.getDay() == 6){
		this.setOptions({
			minTime:'11:00'
		});
	}else
		this.setOptions({
			minTime:'8:00'
		});
};
$('#datetimepicker7').datetimepicker({
	onChangeDateTime:logic,
	onShow:logic
});
$('#datetimepicker8').datetimepicker({
	onGenerate:function( ct ){
		$(this).find('.xdsoft_date')
			.toggleClass('xdsoft_disabled');
	},
	minDate:'-1970/01/2',
	maxDate:'+1970/01/2',
	timepicker:false
});
$('#datetimepicker9').datetimepicker({
	onGenerate:function( ct ){
		$(this).find('.xdsoft_date.xdsoft_weekend')
			.addClass('xdsoft_disabled');
	},
	weekends:['01.01.2014','02.01.2014','03.01.2014','04.01.2014','05.01.2014','06.01.2014'],
	timepicker:false
});
var dateToDisable = new Date();
	dateToDisable.setDate(dateToDisable.getDate() + 2);
$('#datetimepicker11').datetimepicker({
	beforeShowDay: function(date) {
		if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
			return [false, ""]
		}

		return [true, ""];
	}
});
$('#datetimepicker12').datetimepicker({
	beforeShowDay: function(date) {
		if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
			return [true, "custom-date-style"];
		}

		return [true, ""];
	}
});
$('#datetimepicker_dark').datetimepicker({theme:'dark'})


</script>