<!DOCTYPE html>
<html>
<body>
	<div id="page-wrap">
		<h1> Find String Length</h1>
		<form action="" method="post" id="quiz-form">
			<input type="text" name="string" id="string" placeholder="Please enter a string" />
			<input type="submit" name="string-submit" id="string-submit" value="Submit" />
		</form>
		<div>
			<?php
			if (isset($_POST['string-submit'])) {
				$string = $_POST['string'];
				$length = strlen($string);
				echo "The length of the string is: " . $length;
			}
			?>
		</div>
	</div>
</body>
</html>