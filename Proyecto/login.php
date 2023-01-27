<?php
	session_start();
	$error = "";
	
	$servidor = "sdb-v.hosting.stackcp.net";
	$bd = "Proyecto-32313230d3";
	$usuario = "pablopozo03";
	$password = "usuario123";
	
	$enlace = mysqli_connect($servidor, $usuario, $password, $bd); 
	
	if(mysqli_connect_error()){
		die("Hubo un error en la conexión, inténtelo más tarde");
	}

	if (array_key_exists("submit",$_POST))
    {
        
        if (!$_POST['nombre']){
            $error .= "<br>Nombre de usuario requerido<br>";
        }
        
        if (!$_POST['password']){
            $error .= "Contraseña requerida<br>";
        }
        
        if ($error!=""){
            $error = "<p>Hubo algun(os) error(es) en el formulario: ".$error."</p>";
        }
		else
        {
                
            // Comprobamos el inicio de sesion
            $query = "SELECT * FROM usuarios WHERE nombre='".mysqli_real_escape_string($enlace,$_POST['nombre'])."'"; //no ponemos el password porque depende del id que todavia no lo se
                
            $result = mysqli_query($enlace,$query);
            $fila = mysqli_fetch_array($result);
                
            if (isset($fila)){
                    
                $passwordHasheada = md5(md5($fila['id']).$_POST['password']);
                if ($passwordHasheada == $fila['password']){
                    $_SESSION['id'] = $fila['id'];
                    if ($_POST['permanecerIniciada']=='1'){
                        setcookie("id",$fila['id'],time()+60*60*24*365);
                    }
					header("Location: home.php");
                }
                else{
                    $error = "El email/contraseña no pudieron ser encontrados!";
                }
                    
            }

            else{
                $error = "El email/contraseña no pudieron ser encontrados!";
            }
        }
	}	
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de incidencias</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
	<div id="error">
        <?php
            if ($error!=""){
                echo "<div class='alert alert-danger' role='alert'>".$error."</div>";
            }
        ?>
    </div>

	
	<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="contact">
					<form action ="home.php" method="POST">
						<h3>
						<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  							<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  							<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
						</svg>
						Inicie sesión
						</h3>

						<input type="text" name="nombre" placeholder="USUARIO">
						<input type="password" name="password" placeholder="CONTRASEÑA">

						<div>
                		<label>
                    		<input type="checkbox" name="permanecerIniciada" value=1>
							Permanecer iniciada
                		</label>
           			 	</div>

						<button class="submit" name="submit">INICIAR SESIÓN</button>

					</form>
				</div>
			</div>

			<div class="right">
				<div class="right-text"></div>
				<div class="right-inductor"><img src="" alt=""></div>
			</div>
		</div>
	</section>

	<footer class="blockquote-footer fixed-bottom">Gestión de incidencias del <a href="https://iesamachado.org" target="_blank">IES Antonio Machado</a>. Desarrollado por Pablo Jesús Pozo</footer>
</body>
</html>