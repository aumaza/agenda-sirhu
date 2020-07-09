<?php

/*
** Funcion que carga el skeleto del sistema
*/

function skeleton(){

  echo '<link rel="stylesheet" href="/agenda-sirhu/skeleton/css/bootstrap.min.css" >
	<link rel="stylesheet" href="/agenda-sirhu/skeleton/css/bootstrap-theme.css" >
	<link rel="stylesheet" href="/agenda-sirhu/skeleton/css/bootstrap-theme.min.css" >
	<link rel="stylesheet" href="/agenda-sirhu/skeleton/css/fontawesome.css">
	<link rel="stylesheet" href="/agenda-sirhu/skeleton/css/fontawesome.min.css" >
	<link rel="stylesheet" href="/agenda-sirhu/skeleton/css/jquery.dataTables.min.css" >
	<link rel="stylesheet" href="/agenda-sirhu/skeleton/Chart.js/Chart.min.css" >
	<link rel="stylesheet" href="/agenda-sirhu/skeleton/Chart.js/Chart.css" >
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="/agenda-sirhu/skeleton/js/jquery-3.4.1.min.js"></script>
	<script src="/agenda-sirhu/skeleton/js/bootstrap.min.js"></script>
	
	<script src="/agenda-sirhu/skeleton/js/jquery.dataTables.min.js"></script>
	<script src="/agenda-sirhu/skeleton/js/dataTables.editor.min.js"></script>
	<script src="/agenda-sirhu/skeleton/js/dataTables.select.min.js"></script>
	<script src="/agenda-sirhu/skeleton/js/dataTables.buttons.min.js"></script>
	
	<script src="/agenda-sirhu/skeleton/Chart.js/Chart.min.js"></script>
	<script src="/agenda-sirhu/skeleton/Chart.js/Chart.bundle.min.js"></script>
	<script src="/agenda-sirhu/skeleton/Chart.js/Chart.bundle.js"></script>
	<script src="/agenda-sirhu/skeleton/Chart.js/Chart.js"></script>';
}


/*
* Funcion para agregar usuarios al sistema
*/

function agregarUser($nombre,$user,$pass1,$pass2,$role,$conn){

	mysqli_select_db('agenda_sirhu');	

	$sqlInsert = "INSERT INTO usuarios ".
		"(nombre,user,password,role)".
		"VALUES ".
      "('$nombre','$user','$pass1','$role')";
		


	if(strcmp($pass2, $pass1) == 0){
		mysqli_query($conn,$sqlInsert);	
		echo "<br>";
		echo '<div class="container">';
		echo '<div class="alert alert-success" role="alert">';
		echo 'Usuario Creado Satisfactoriamente. Aguarde un Instante que será Redireccionado';
		echo "</div>";
		echo "</div>";	
	}else{
		echo "<br>";
		echo '<div class="container">';
		echo '<div class="alert alert-warning" role="alert">';
		echo "Las Contraseñas no Coinciden. Intente Nuevamente!. Aguarde un Instante que será Redireccionado";
		echo "</div>";
		echo "</div>";
	}
}

/*
* Funcion para editar la contraseña de los usuarios al sistema
*/

function updatePass($id,$pass1,$pass2,$conn){

	

    	$sql = "UPDATE usuarios set password = '$pass1' WHERE id = '$id'";
    	mysqli_select_db('agenda_sirhu');
    	
    	
    	if(strcmp($pass2, $pass1) == 0){
    		
		      mysqli_query($conn,$sql);
			echo "<br>";
			echo '<div class="section"><br>
			      <div class="container">
			      <div class="row">
			      <div class="col-md-12">';
			echo '<div class="alert alert-success" role="alert">';
			echo 'Password Actualizado Satisfactoriamente<br>';
			echo 'Aguarde un Instante que será redirigido';
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo '<meta http-equiv="refresh" content="4;URL=http:../main/main.php "/>';
			
	   	}else{
			echo "<br>";
			echo '<div class="section"><br>
			      <div class="container">
			      <div class="row">
			      <div class="col-md-12">';
			echo '<div class="alert alert-danger" role="alert">';
			echo "Las Contraseñas no Coinciden. Intente Nuevamente!<br>";
			echo 'Aguarde un instante que será redirigido';
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo '<meta http-equiv="refresh" content="4;URL=http:../main/main.php "/>';
			
			
			

    	}

    
}

/*
* Funcion para cambiar los permisos de los usuarios al sistema
*/

function cambiarPermisos($id,$role,$conn){

  $sql = "UPDATE usuarios set role = '$role' where id = '$id'";
  mysqli_select_db('agenda_sirhu');
  $retval = mysqli_query($conn,$sql);
  if($retval){
    
    echo "<br>";
			echo '<div class="section"><br>
			      <div class="container">
			      <div class="row">
			      <div class="col-md-12">';
			echo '<div class="alert alert-success" role="alert">';
			echo 'Rol Actualizado Satisfactoriamente';
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
  
	  }else{
			echo "<br>";
			echo '<div class="section"><br>
			      <div class="container">
			      <div class="row">
			      <div class="col-md-12">';
			echo '<div class="alert alert-warning" role="alert">';
			echo "El usuario no existe. Intente Nuevamente!";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
			echo "</div>";
		}
 
}

/*
** Agregar Contacto
*/

function addContact($nombre,$apellido,$email,$tel1,$tel2,$cel,$f_nac,$ofi,$cargo,$org,$dir,$conn){

		
	mysqli_select_db('agenda_sirhu');
	$sqlInsert = "INSERT INTO contactos ".
		"(nombre,apellido,email,telefono1,telefono2,movil,fechaNacimiento,oficina,cargo,organismo,direccion)".
		"VALUES ".
      "('$nombre','$apellido','$email','$tel1','$tel2','$cel','$f_nac','$ofi','$cargo','$org','$dir')";
           
	$res = mysqli_query($conn,$sqlInsert);


	if($res){
		//mysqli_query($conn,$sqlInsert);
		echo "<br>";
		echo '<div class="container">';
		echo '<div class="alert alert-success" role="alert">';
		echo 'Contacto Guardado Exitosamente. Aguarde un Instante que será Redireccionado';
		echo "</div>";
		echo "</div>";	
	}else{
		echo "<br>";
		echo '<div class="container">';
		echo '<div class="alert alert-warning" role="alert">';
		echo "Hubo un error al guardar el Contacto!. Aguarde un Instante que será Redireccionado" .mysqli_error($conn);
		echo "</div>";
		echo "</div>";
	}
}


function updateContact($id,$nombre,$apellido,$email,$tel1,$tel2,$cel,$f_nac,$ofi,$cargo,$org,$dir,$conn){

		
	mysqli_select_db('agenda_sirhu');
	$sqlInsert = "update contactos set nombre = '$nombre', apellido = '$apellido', email = '$email', telefono1 = '$tel1', telefono2 = '$tel2', movil = '$cel',
	fechaNacimiento = '$f_nac', oficina = '$ofi', cargo = '$cargo', organismo = '$org', direccion = '$dir' where id = '$id'";
           
	$res = mysqli_query($conn,$sqlInsert);


	if($res){
		//mysqli_query($conn,$sqlInsert);
		echo "<br>";
		echo '<div class="container">';
		echo '<div class="alert alert-success" role="alert">';
		echo 'Contacto Guardado Exitosamente. Aguarde un Instante que será Redireccionado';
		echo "</div>";
		echo "</div>";	
	}else{
		echo "<br>";
		echo '<div class="container">';
		echo '<div class="alert alert-warning" role="alert">';
		echo "Hubo un error al guardar el Contacto!. Aguarde un Instante que será Redireccionado" .mysqli_error($conn);
		echo "</div>";
		echo "</div>";
	}
}

function contactos($conn,$varsession){

if($conn)
{
	$sql = "SELECT * FROM contactos";
    	mysqli_select_db('agenda_sirhu');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="panel panel-success" >
	      <div class="panel-heading"><span class="pull-center "><img src="../../icons/actions/meeting-attending.png"  class="img-reponsive img-rounded"> Contactos';
	echo '</div><br>';

            echo "<table class='display compact' style='width:100%' id='myTable'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>ID</th>
		    <th class='text-nowrap text-center'>Nombre</th>
                    <th class='text-nowrap text-center'>Apellido</th>
                    <th class='text-nowrap text-center'>Email</th>
                    <th class='text-nowrap text-center'>Telefono 1</th>
                    <th class='text-nowrap text-center'>Telefono 2</th>
                    <th class='text-nowrap text-center'>Movil</th>
                    <th class='text-nowrap text-center'>F. Nac</th>
                    <th class='text-nowrap text-center'>Oficina Nro</th>
                    <th class='text-nowrap text-center'>Cargo</th>
                    <th class='text-nowrap text-center'>Organismo</th>
                    <th class='text-nowrap text-center'>Direccion</th>
                    <th>&nbsp;</th>
                    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['id']."</td>";
			 echo "<td align=center>".$fila['nombre']."</td>";
			 echo "<td align=center>".$fila['apellido']."</td>";
			 echo "<td align=center>".$fila['email']."</td>";
			 echo "<td align=center>".$fila['telefono1']."</td>";
			 echo "<td align=center>".$fila['telefono2']."</td>";
			 echo "<td align=center>".$fila['movil']."</td>";
			 echo "<td align=center>".$fila['fechaNacimiento']."</td>";
			 echo "<td align=center>".$fila['oficina']."</td>";
			 echo "<td align=center>".$fila['cargo']."</td>";
			 echo "<td align=center>".$fila['organismo']."</td>";
			 echo "<td align=center>".$fila['direccion']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo '<a href="../contactos/editar.php?id='.$fila['id'].'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</a>';
			 if($varsession == 'root'){
			 echo '<a href="#" data-href="../contactos/eliminar.php?id='.$fila['id'].'" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a>';
			 }
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<button type="button" class="btn btn-primary">Cantidad de Registros:  ' .$count; echo '</button>';
		echo '</div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}


function usuarios($conn){

if($conn)
{
	$sql = "SELECT * FROM usuarios";
    	mysqli_select_db('agenda_sirhu');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="panel panel-success" >
	      <div class="panel-heading"><span class="pull-center "><img src="../../icons/actions/user-group-properties.png"  class="img-reponsive img-rounded"> Usuarios';
	echo '</div><br>';

            echo "<table class='display compact' style='width:100%' id='myTable'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>ID</th>
		    <th class='text-nowrap text-center'>Nombre</th>
                    <th class='text-nowrap text-center'>Usuario</th>
                    <th class='text-nowrap text-center'>Role</th>
                    <th>&nbsp;</th>
                    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['id']."</td>";
			 echo "<td align=center>".$fila['nombre']."</td>";
			 echo "<td align=center>".$fila['user']."</td>";
			 echo "<td align=center>".$fila['role']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo '<a href="../usuarios/editar.php?id='.$fila['id'].'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span> Editar</a>';
			 echo '<a href="#" data-href="../usuarios/eliminar.php?id='.$fila['id'].'" data-toggle="modal" data-target="#confirm-delete" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Borrar</a>';
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '<a href="../usuarios/nuevoRegistro.php"><button type="button" class="btn btn-default"><span class="pull-center "><img src="../../icons/actions/list-add.png"  class="img-reponsive img-rounded"> Agregar Usuario</button></a><br><hr>';
		echo '<button type="button" class="btn btn-primary">Cantidad de Registros:  ' .$count; echo '</button>';
		echo '</div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}



function loadUser($conn,$nombre){

if($conn)
{
	$sql = "SELECT * FROM usuarios where nombre = '$nombre'";
    	mysqli_select_db('agenda_sirhu');
    	$resultado = mysqli_query($conn,$sql);
	//mostramos fila x fila
	$count = 0;
	echo '<div class="panel panel-success" >
	      <div class="panel-heading"><span class="pull-center "><img src="../../icons/actions/user-group-properties.png"  class="img-reponsive img-rounded"> Mis Datos';
	echo '</div><br>';

            echo "<table class='display compact' style='width:100%' id='myTable'>";
              echo "<thead>
		    <th class='text-nowrap text-center'>ID</th>
		    <th class='text-nowrap text-center'>Nombre</th>
                    <th class='text-nowrap text-center'>Usuario</th>
                    <th>&nbsp;</th>
                    </thead>";


	while($fila = mysqli_fetch_array($resultado)){
			  // Listado normal
			 echo "<tr>";
			 echo "<td align=center>".$fila['id']."</td>";
			 echo "<td align=center>".$fila['nombre']."</td>";
			 echo "<td align=center>".$fila['user']."</td>";
			 echo "<td class='text-nowrap'>";
			 echo '<a href="../usuario/editar.php?id='.$fila['id'].'" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span> Cambiar Password</a>';
			 echo "</td>";
			 $count++;
		}

		echo "</table>";
		echo "<br>";
		echo '</div>';
		}else{
		  echo 'Connection Failure...';
		}

    mysqli_close($conn);

}

/*
** Funcion alta de contacto
*/
function newContact(){

      echo '<div class="container">
	    <div class="row">
	    <div class="col">
	      <h2>Nuevo Contacto</h2><hr>
	        <form action="../contactos/formNuevoRegistro.php" method="POST">
	        <div class="form-group">
		  <label for="nombre">Nombre:</label>
		  <input type="text" class="form-control" id="nombre" name="nombre"  onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,25);" onKeyUp="limitText(this,25);" required>
		</div>
		<div class="form-group">
		  <label for="apellido">Apellido:</label>
		  <input type="text" class="form-control" id="apellido" name="apellido"  onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,25);" onKeyUp="limitText(this,25);" required>
		</div>
		<div class="form-group">
		  <label for="email">Email:</label>
		  <input type="email" class="form-control" id="email" name="email"  onKeyDown="limitText(this,60);" onKeyUp="limitText(this,60);"required>
		</div>
		<div class="form-group">
		  <label for="pwd">Telefono 1:</label>
		  <input type="text" class="form-control" id="tel1" name="tel1" onkeyup="this.value=Numeros(this.value);" onKeyDown="limitText(this,10);" onKeyUp="limitText(this,10);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Telefono 2:</label>
		  <input type="text" class="form-control" id="tel2" name="tel2" onkeyup="this.value=Numeros(this.value);" onKeyDown="limitText(this,10);" onKeyUp="limitText(this,10);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Celular:</label>
		  <input type="text" class="form-control" id="celular" name="movil" onkeyup="this.value=Numeros(this.value);" onKeyDown="limitText(this,10);" onKeyUp="limitText(this,10);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Bithday:</label>
		  <input type="date" class="form-control" id="f_nac" name="f_nac" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Oficina:</label>
		  <input type="text" class="form-control" id="oficina" name="oficina" onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,50);" onKeyUp="limitText(this,50);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Cargo:</label>
		  <input type="text" class="form-control" id="cargo" name="cargo" onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,60);" onKeyUp="limitText(this,60);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Organismo:</label>
		  <input type="text" class="form-control" id="org" name="org" onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,70);" onKeyUp="limitText(this,70);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Dirección:</label>
		  <input type="text" class="form-control" id="dir" name="dir" onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,80);" onKeyUp="limitText(this,80);" required>
		</div>
		
		<button type="submit" class="btn btn-success" name="A">Agregar</button>
	      </form> <br>
	      
	    </div>
	    </div>
	</div>';

}


function editContact($id,$conn){
      
      $sql = "select * from contactos where id = '$id'";
      mysqli_select_db('agenda_sirhu');
      $res = mysqli_query($conn,$sql);
      $fila = mysqli_fetch_assoc($res);
      

      echo '<div class="container">
	    <div class="row">
	    <div class="col-sm-8">
	      <h2>Editar Contacto</h2><hr>
	        <form action="../contactos/formUpdate.php" method="POST">
	        <input type="hidden" id="id" name="id" value="' . $fila['id'].'" />
	        <div class="form-group">
		  <label for="nombre">Nombre:</label>
		  <input type="text" class="form-control" id="nombre" name="nombre" value="'.$fila['nombre'].'" onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,25);" onKeyUp="limitText(this,25);" required>
		</div>
		<div class="form-group">
		  <label for="apellido">Apellido:</label>
		  <input type="text" class="form-control" id="apellido" name="apellido" value="'.$fila['apellido'].'"  onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,25);" onKeyUp="limitText(this,25);" required>
		</div>
		<div class="form-group">
		  <label for="email">Email:</label>
		  <input type="email" class="form-control" id="email" name="email" value="'.$fila['email'].'" onKeyDown="limitText(this,60);" onKeyUp="limitText(this,60);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Telefono 1:</label>
		  <input type="text" class="form-control" id="tel1" name="tel1" value="'.$fila['telefono1'].'" onkeyup="this.value=Numeros(this.value);" onKeyDown="limitText(this,10);" onKeyUp="limitText(this,10);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Telefono 2:</label>
		  <input type="text" class="form-control" id="tel2" name="tel2" value="'.$fila['telefono2'].'" onkeyup="this.value=Numeros(this.value);" onKeyDown="limitText(this,10);" onKeyUp="limitText(this,10);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Celular:</label>
		  <input type="text" class="form-control" id="celular" name="movil" value="'.$fila['movil'].'" onkeyup="this.value=Numeros(this.value);" onKeyDown="limitText(this,10);" onKeyUp="limitText(this,10);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Bithday:</label>
		  <input type="date" class="form-control" id="f_nac" name="f_nac" value="'.$fila['fechaNacimiento'].'" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Oficina:</label>
		  <input type="text" class="form-control" id="oficina" name="oficina" value="'.$fila['oficina'].'" onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,50);" onKeyUp="limitText(this,50);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Cargo:</label>
		  <input type="text" class="form-control" id="cargo" name="cargo" value="'.$fila['cargo'].'" onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,60);" onKeyUp="limitText(this,60);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Organismo:</label>
		  <input type="text" class="form-control" id="org" name="org" value="'.$fila['organismo'].'" onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,70);" onKeyUp="limitText(this,70);" required>
		</div>
		<div class="form-group">
		  <label for="pwd">Dirección:</label>
		  <input type="text" class="form-control" id="dir" name="dir" value="'.$fila['direccion'].'" onkeyup="this.value=Text(this.value);" onKeyDown="limitText(this,80);" onKeyUp="limitText(this,80);" required>
		</div>
		
		<button type="submit" class="btn btn-success" name="A">Editar</button>
	      </form> <br>
	      <a href="../main/main.php"><input type="button" value="Volver" class="btn btn-primary"></a>
	      
	    </div>
	    </div>
	</div>';

}


function editPassUser($id,$conn){

$sql = "select * from usuarios where id = '$id'";
      mysqli_select_db('agenda_sirhu');
      $res = mysqli_query($conn,$sql);
      $fila = mysqli_fetch_assoc($res);
      

      echo '<div class="container">
	    <div class="row">
	    <div class="col-sm-8">
	      <h2>Cambiar Password</h2><hr>
	      
	      <form action="formUpdate.php" method="post">
	      <input type="hidden" id="id" name="id" value="' . $fila['id'].'" />
   
         
	  <div class="input-group">
	    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	    <input id="text" type="text" class="form-control" value="' . $fila['nombre'].'" name="nombre" value="" onkeyup="this.value=Text(this.value);" readonly required>
	  </div>
	
	  <div class="input-group">
	    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
	    <input id="text" type="text" class="form-control" name="user" onKeyDown="limitText(this,20);" onKeyUp="limitText(this,20);" value="' . $fila['user'].'" readonly required>
	  </div>
	  <div class="input-group">
	    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	    <input id="password" type="password" class="form-control" name="pass1" onKeyDown="limitText(this,15);" onKeyUp="limitText(this,15);" placeholder="Password" >
	  </div>
	  <div class="input-group">
	    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
	    <input  type="password" class="form-control" name="pass2" onKeyDown="limitText(this,15);" onKeyUp="limitText(this,15);" placeholder="Repita Password" >
	  </div>
	  <br>
	
	<div class="form-group">
	  <div class="col-sm-offset-2 col-sm-12" align="left">
	  <button type="submit" class="btn btn-success" name="A"><span class="glyphicon glyphicon-pencil"></span>  Cambiar Password</button>
	  <a href="../main/main.php"><input type="button" value="Volver al Menú Principal" class="btn btn-primary"></a>
	  </div>
	  </div>
	</form> 
	      
	      </div>
	      </div>
	      </div>';



}


/*
** Funcion para generar archivo de password
*/


function gentxt($usuario,$password){
  
  $fileName = "gen_pass/$usuario.pass.txt"; 
  //$mensaje = $password;
  
  if (file_exists($fileName)){
  
  //echo "Archivo Existente...";
  //echo "Se actualizaran los datos...";
  $file = fopen($fileName, 'w+') or die("Se produjo un error al crear el archivo");
  
  fwrite($file, $password) or die("No se pudo escribir en el archivo");
  
  fclose($file);
  echo '<div class="container">
	<div class="row">
	<div class="col-md-6">';
	echo '<div class="alert alert-info" role="alert">';
	echo "Se ha generado su archivo de password. Descargue el archivo generado. Recuerde modificar su Password cuando ingrese nuevamente.";
	echo "</div>";
  echo "<hr>";
  echo '<a href="download_pass.php?file_name='.$fileName.'" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-save"></span> Descargar</a>';
  echo '</div>
	</div>
	</div>';
  
  
  }else{
  
      //echo "Se Generará archivo de respaldo..."
      $file = fopen($fileName, 'w') or die("Se produjo un error al crear el archivo");
      fwrite($file, $password) or die("No se pudo escribir en el archivo");
      fclose($file);
      
      
      echo '<div class="container">
	    <div class="row">
	    <div class="col-md-6">';
        echo '<div class="alert alert-info" role="alert">';
	echo "Se ha generado su archivo de password. Descargue el archivo generado. Recuerde modificar su Password cuando ingrese nuevamente.";
	echo "</div>";
        echo "<hr>";
        echo '<a href="download_pass.php?file_name='.$fileName.'" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-save"></span> Descargar</a>';
        echo '</div>
	      </div>
	     </div>';
  
  }
  
  
}


/*
** Funcion para generar password aleatorio
*/

function genPass(){
    //Se define una cadena de caractares.
    //Os recomiendo desordenar las minúsculas, mayúsculas y números para mejorar la probabilidad.
    $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890@";
    //Obtenemos la longitud de la cadena de caracteres
    $stringLong = strlen($string);
 
    //Definimos la variable que va a contener la contraseña
    $pass = "";
    //Se define la longitud de la contraseña, puedes poner la longitud que necesites
    //Se debe tener en cuenta que cuanto más larga sea más segura será.
    $longPass=10;
 
    //Creamos la contraseña recorriendo la cadena tantas veces como hayamos indicado
    for($i=1 ; $i<=$longPass ; $i++){
        //Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
        $pos = rand(0,$stringLong-1);
 
        //Vamos formando la contraseña con cada carácter aleatorio.
        $pass .= substr($string,$pos,1);
    }
    return $pass;
}

/*
** Funcion para blanquear password
*/

function resetPass($conn,$usuario){

  $password = genPass();
  
  $sql = "UPDATE usuarios SET password = '$password' where user = '$usuario'";
  
  $retval = mysqli_query($conn,$sql);
 
  
  if($retval){
    echo '<div class="container">
      <div class="row">
      <div class="col-md-12">';
    
    echo '<div class="alert alert-success" role="alert">';
    echo "Su Password fue blanqueada con Exito!";
    echo "<br>";
    gentxt($usuario,$password);
    //echo 'Y es la siguiente: '.$password;
    echo "</div>";
    echo '</div>
	  </div>
	  </div>';
    
  }else{
    
    echo '<div class="container">
      <div class="row">
      <div class="col-md-12">';
    echo '<div class="alert alert-danger" role="alert">';
    echo "Error al Blanquear Password";
    echo "</div>";
     echo '</div>
	  </div>
	  </div>';
    
  }
  
   
 /* // Se envia mail al usuario para notificarlo
  $to = $email;
  $subject = "Blanqueo de Password";
  $message = "Su nueva Password es:  '.$password.' ingrese con su usuario para poder actualizarlo de inmediato"; 
  
  $send = mail($to,$subjet,$message);
  
  if($send){
  echo '<div class="container">
      <div class="row">
      <div class="col-md-12">';
    echo '<div class="alert alert-success" role="alert">';
    echo "Se le ha enviado el nuevo Password a su casilla de Correo Electrónico";
    echo "</div>";
    echo '</div>
	  </div>
	  </div>';
  }else{
    
     echo '<div class="container">
      <div class="row">
      <div class="col-md-12">';
    echo '<div class="alert alert-danger" role="alert">';
    echo "Hubo un error al intentar enviar el Correo";
    echo "</div>";
    echo '</div>
	  </div>
	  </div>';
  }*/
  
  
  
  
}



?>
