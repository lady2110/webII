<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link rel="stylesheet" href="styles/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="http://localhost/institucion_ci/public/assets/css/estilo1.css">
	<link rel="stylesheet" href="<?php base_url()?>public/assets/css/estilo1.css"
	
</head>
<body>
	<h2>Bienvenido a mi Sitio <?= $Nombre ?></h2>
	<ul><?php  foreach($programas as $programa){?>
		<li><?php echo $programa?></li>
		<?php }?>
	</ul>
	<select name="progrs" id="progs">
		<?php foreach($programas as $prog){?>
		<option value="<?php echo $prog ?>"><?= $prog ?></option>
		<?php } ?>
	</select>
	<table class="table table-primary" style="margin-top: 10px;">
	<?php foreach($programas as $progs):?>
		<tr>
			<td><?php echo $progs ?></td>
		</tr><?php endforeach ?>
	</table>
	<ol>
		<?php foreach($contacto as $cont){?>
		<li><?php echo $cont?></li>
		<?php }?>
	</ol>
	<span>
			Cedula:<?=$contacto['Cedula']?>
			Nombre:<?=$contacto['Nombre']?>
			Salario:<?=$contacto['Salario']?>
		</span>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
</body>
</html>
