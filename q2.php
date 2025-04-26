<!DOCTYPE html>
<html>
<body>
	<div id="page-wrap">
		<h1>Php - Calculate Electricity Bill</h1>
		<form action="" method="post" id="quiz-form">
			<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
			<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>
		<div>
			<?php
			if (isset($_POST['unit-submit'])) {
				$units = $_POST['units'];
				if ($units <= 0) {
					echo "Invalid input. Please enter a positive number.";
				} else {
					$cost = 0;
					if ($units <= 50) {
						$cost = $units * 3.50;
					} elseif ($units <= 150) {
						$cost = 50 * 3.50 + ($units - 50) * 4.00;
					} elseif ($units <= 250) {
						$cost = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
					} else {
						$cost = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
					}
					echo "The electricity bill for " . $units . " units is Rs. " . $cost;
				}
			}
			?>
		</div>
	</div>
</body>
</html>