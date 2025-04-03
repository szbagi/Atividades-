<!DOCTYPE html>
<html>
<?php
	$nums = $_POST['nums'];
	$array_nums = explode(" ",$nums);
	$total = 0;
	$tamanho = count($array_nums);

?>
<head>
	<title>Resultado</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	<body  >
		<p class="mensagem"> <?php echo ($nums) ?></p>

		<p class="mensagem"> <?php print ("A lista tem $tamanho elementos") ?></p>

		<?php
			foreach($array_nums as $x){
				$total = $total + $x;
		?>

			<p class="mensagem"> <?php print ("$x  -->   $total") ?></p>

		<?php
			}
		?>
	</body>
</html>