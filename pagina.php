<!DOCTYPE html>
<html>
<?php
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$doc = $_POST['doc'];
	$doc2 = $_POST['doc2'];
	$doc3 = $_POST['doc3'];


	
?>
<head>
	<title>Resultado</title>
</head>
<body>
<table>
		<tr>
			<td>Nome:</td>
			<td><?php echo $nome; ?></td>
		</tr>
		<tr>
			<td>Idade:</td>
			<td><?php echo $idade; ?></td>
		</tr>
		<tr>
			<td>Documento 1:</td>
			<td>
				<?php echo $doc; ?><br>	
			</td>
		</tr>

		<tr>
			<td>Documento 2:</td>
			<td>
				<?php 
						if (isset($doc2)) 
						{
						    foreach ($doc2 as $x){
						    	echo("$x &nbsp;&nbsp;&nbsp;&nbsp;");
						    } 
						}
					?>
				 <br>	
			</td>
		</tr>

		<tr>
			<td>Documento 3:</td>
			<td>
				<?php echo $doc3; ?><br>	
			</td>
		</tr>

	</table>
</body>
</html>