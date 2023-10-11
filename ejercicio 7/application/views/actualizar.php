<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(isset($_SESSION['ci_global'])){
    session_destroy();
}	
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>CRUD CodeIgniter</title>

	<style type="text/css">

	body{
		font:15px Arial,Helvetica,sans-serif;
		padding: 0;
		margin: 0;
		background-color: #f4f4f4;
	}
	/* Estilos Globales */
	.contenedor{
		width: 80%;
		margin: auto;
		overflow: hidden;
	}
	ul{
		margin: 0;
		padding:0;
	}
	 .boton1{
		background: #222829;
		height: 35px;
		width: 185px;
		border: 1px solid skyblue;

		padding-left: 10px;
		padding-right: 10px;
		color:#fff;
		border-radius: 10px;
	} 
	 .boton2{
		width: 95%;
		height: 20px;
		padding:8px;
		color:#000;
		box-shadow: 1px 1px 2px  rgba(87, 232, 230, 1);
		border-radius: 5px;
	} 

	/*Formulario para boletin*/
	#boletin h1{
		float: left;
	}

	/* Lateral */
	aside#lateral{
		float: right;
		width: 30%;
		margin-top: 10px;
	}
	.oscuro{
		background-color: #eee;
		border-radius: 2px;
		padding: 10px;
		border: solid 2px;
		color: #000;
		margin-top: 10px;
		margin-bottom: 10px;
	}
	/* Main.col */
	article#main-col{
		float:left;
		width: 65%;
	}

	/* Formulario de contacto */
	input, textarea{
		width: 100%;
		height: 35px;
		border: 1px solid black;
	}
	textarea{
		height: 120px;
	}
	input[type="submit"]{
		background-color: #838;
		color:white;
	}
	/* Media Queries */
	@media(max-width: 768px){
		header #marca,
		header nav,
		header nav li,
		#boletin h1,
		#boletin form,
		#cajas .caja,
		article#main-col,
		aside#lateral{
			float: none;
			text-align: center;
			width: 100%;

		}
		
		header{
			padding-bottom: 20px;
		}
		#boletin h1{
			margin-top: 40px;

		}
		#boletin button{
			display: block;
			width: 100%;

		}
		#boletin form input[type="email"]{
			width: 100%;
			margin-bottom: 6px;
		}
		input, textarea{
			width: 98%;
		}
	}
	body {font-family: Arial, Helvetica, sans-serif;}

	table {     
		font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    	font-size: 10px;    
    	margin: 10px;     
    	width: 90%; 
    	text-align: left;    
    	border-collapse: collapse; 
    }
	th {     
		font-size: 15px;     
		font-weight: normal;     
		padding: 8px;   
		text-align: center;  
		background: #222829;
  		border-top: 1px solid #fff; 
  		color: #fff; 
  		border-radius: 2px;
    }
	td {    
		text-align: center;    
		border-bottom: 1px solid #000;
  		color: #000;    
    	order-top: 1px solid transparent; 
    	font-size: 13px;

	}

	tr:hover td { 
		background: #ddd; 
		color: #335; 
		border-radius: 5px;
		box-shadow: 10px 20px 20px  rgba(0, 0, 0, 0.5);
	}
	</style>

</head>
<body>
	<header style = "background-color: #aaa;">
		<div class="contenedor">
			<div>
				<h1>INF 324</h1>
			</div>
		</div>		
	</header>
	<hr>
	
	<section id="main">
		<div class="contenedor">
			<article id="main-col">
				<h1>Tabla Estudiantes</h1>
				<table>
					<tr> <th>CI</th> <th>Apellidos</th> <th>Nombre</th> <th>Departamento</th><th>Genero</th><th>Fecha_Nac</th><th>Nota</th><th>Acciones</th>
					</tr>
					<?php foreach($estudiante as $est): ?>
				        <tr>
				        	<td><?php echo $est->ci; ?></td>
				        	<td><?php echo $est->apellidos; ?></td>
				            <td><?php echo $est->nombres; ?></td>
				            <td><?php echo $est->depto; ?></td>
				            <td><?php echo $est->genero; ?></td>
				            <td><?php echo $est->fecha_nac; ?></td>
				            <td><?php echo $est->nota; ?></td>
				            <td style="height: 25px;">
					          <?php echo form_open('welcome/eliminar/'.$est->ci) ?>
										    <input style="width: 185px; border-radius: 10px;" type="submit" value="Eliminar">
										<?php echo form_close() ?>									
										<?php 
										    echo '
										    <button type="botton" class="boton1"  name = "actualizar" onclick="llenar_datos(`'.$est->ci.'`,`'.$est->apellidos.'`, `'.$est->nombres.'`, `'.$est->depto.'`, `'.$est->fecha_nac.'`, `'.$est->genero.'`,`'.$est->nota.'` )">Actualizar</button>' ;
										?>
		            </td>
						</tr>
				    <?php endforeach; ?>
				</table>		
			</article>

			<aside id="lateral" >
				<div class="oscuro">
					<h3>Registro Estudiante</h3>
					
					<?php 
						echo form_open('welcome/agregar', array('id' =>'actualizacion'));
					?>
						<label >CI</label>
						<input class="boton2" type="text" name="ci" placeholder="Ingrese CI"id="ci">
						<br>
						<label >Apellidos</label>
						<input class="boton2" type="text" name="ape" placeholder="Ingrese sus apellidos" id="ape">
						<br>
						<label >Nombres</label>
						<input class="boton2" type="text" name="nombre" placeholder="Ingrese nombres" id="nombre">
						<br>
						<label >Departamento</label>
						<input class="boton2" type="text" name="departamento" placeholder="Ingresa el Departamento"id="departamento">
						<br>
						<label >Genero</label><br>
						<input class="boton2" type="text" name="sexo" placeholder="M o F"id="sexo">
						<br>
						<label >Fecha de nacimiento</label>
						<input class="boton2" type="text" name="fec_nac" placeholder="Ingresa su fecha de nacimiento"id="fec_nac">
						<br>
						<br>
						<input type="submit" name="registrar" value="Añadir">
					<?php echo form_close() ?>
				</div>
			</aside>
		</div>
		
	</section>
	<script>

		// let url = "<?php echo base_url('welcome/editar'); ?>";
		let url = "<?php echo base_url('index.php/welcome/actualizar'); ?>";	
		const llenar_datos = (ci, apellido, nombre, departamento, fec_nac, sexo) => {
			let path = url+"/"+ci;
			console.log(path);

			document.getElementById('actualizacion').setAttribute('action', path);
			console.log(ci, nombre, departamento, fec_nac, sexo);
			document.getElementById('ci').value = ci;
			document.getElementById('ape').value = apellido;
			document.getElementById('nombre').value = nombre;
			document.getElementById('departamento').value = departamento;
			document.getElementById('sexo').value = sexo;
			document.getElementById('fec_nac').value = fec_nac;
		};

	</script>

</body>
</html>
