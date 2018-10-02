<form action=" " method="POST">
	<input type="text" name="komen"><br>
	<input type="submit" name="submit" value="input">
</form>
<?php
	if (isset($_POST['submit'])) {
		$komen = $_POST['komen'];

		$k = strlen($komen);

		if ($k < 5) {
			echo "Jumlah kata kurang";
		}
		else{
			echo "$k";
		}
	}
