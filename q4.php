<!DOCTYPE html>
<html>
<body>
	<div id="page-wrap">
		<h1> Check Number Sign</h1>
		<form action="" method="post" id="quiz-form">
			<input type="number" name="number" id="number" placeholder="Please enter a number" />
			<input type="submit" name="number-submit" id="number-submit" value="Submit" />
		</form>
		<div>
			<?php
			if (isset($_POST['number-submit'])) {
				$number = $_POST['number'];
				if ($number > 0) {
					echo "The number is positive.";
				} elseif ($number < 0) {
					echo "The number is negative.";
				} else {
					echo "The number is zero.";
				}
			}
			?>
		</div>
	</div>
</body>
</html>