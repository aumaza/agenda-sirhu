<?php include "../../connection/connection.php";
      include "../../functions/functions.php";

        session_start();
	$varsession = $_SESSION['user'];
	
	if($varsession == null || $varsession = ''){
	echo '<div class="alert alert-danger" role="alert">';
	echo "Usuario o Contrase a Incorrecta. Reintente Por Favor...";
	echo '<br>';
	echo "O no tiene permisos o no ha iniciado sesion...";
	echo "</div>";
	echo '<a href="../../index.html"><br><br><button type="submit" class="btn btn-primary">Aceptar</button></a>';	
	die();
	}

?>


<html><head>
	<meta charset="utf-8">
	<title>Eliminar Registro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="icons/actions/bookmarks-organize.png" />
	<?php skeleton();?>
	
	
</head>
<body background="../../img/background.png" class="img-fluid" alt="Responsive image" style="background-repeat: no-repeat; background-position: center center; background-size: cover; height: 100%">

<div class="container-fluid">
      <div class="row">
      <div class="col-md-12 text-center">
	<button><span class="glyphicon glyphicon-user"></span> Usuario: <?php echo $_SESSION['user'] ?></button>
	<?php setlocale(LC_ALL,"es_ES"); ?>
	<button><span class="glyphicon glyphicon-time"></span> <?php echo "Hora Actual: " . date("H:i"); ?></button>
	 <?php setlocale(LC_ALL,"es_ES"); ?>
	<button><span class="glyphicon glyphicon-calendar"></span> <?php echo "Fecha Actual: ". strftime("%d de %B del %Y"); ?> </button>
	</div>
	</div>
	</div>
	<br>

    <div class="container">
    <div class="main">
    <h2>Eliminar Registro</h2>
    
    <?php

if($conn){

        $id = $_GET['id'];
		
		$sqlInsert = "DELETE FROM usuarios WHERE id = '$id'";
		
  			
mysqli_select_db('agenda_sirhu');
$q = mysqli_query($conn,$sqlInsert);

if(!$q)
{
    echo '<div class="alert alert-danger" role="alert">';
   echo 'Could not enter data: ' . mysqli_error($conn);
   echo '<meta http-equiv="refresh" content="3;URL=http:../main/main.php "/>';
   echo "</div>";
}

else
  {
    echo '<div class="alert alert-success" role="alert">';
    echo "Registro Eliminado Exitosamente!!";
    echo "</div>";
    echo '<meta http-equiv="refresh" content="3;URL=http:../main/main.php "/>';
}
}	
	//cerramos la conexion
	
	mysqli_close($conn);

	 	
	  	
    
    ?>
    </div>
    </div>



</body>
</html>