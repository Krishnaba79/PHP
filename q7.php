<!DOCTYPE html>
<html>
<body>
	<div id="page-wrap">
		<h1> Count Words in a String</h1>
		<form action="" method="post" id="quiz-form">
			<textarea name="string" id="string" placeholder="Please enter a string"></textarea>
			<input type="submit" name="string-submit" id="string-submit" value="Submit" />
		</form>
		<div>
			<?php
			if (isset($_POST['string-submit'])) {
				$string = $_POST['string'];
				$words = str_word_count($string);
				echo "The number of words in the string is: " . $words;
			}
			?>
		</div>
	</div>
</body>
</html>