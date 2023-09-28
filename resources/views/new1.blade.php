<html>
<body>
	<form method="POST" action="">
		<input type="text" name="nama"><br>
		<input type="number" name="umur"><br>
		<input type="submit" name="submit" value="submit">
	</form>

	<?php
	if ($_POST)
	{
		echo 'Nama saya adalaah ' . $_POST['nama'];
		echo '<br>';
		echo 'Umur saya adalah : ' . $_POST['umur'];
    }
    
   
	?>
</body>
</html>