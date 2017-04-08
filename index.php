<?php

	function checkPalindroma($text) {
		$length = strlen($text);
		for ($i=0, $j=$length-1; $i < $length; ++$i, --$j) { 
			if ($text[$i] == ' ')
				++$i;
			if ($text[$j] == ' ')
				--$j;
			if ($text[$i] != $text[$j]) {
				return false;
			}
		}
		return true;
	}

	if (isset($_POST['text'])) {
		$isPalindroma = checkPalindroma($_POST['text']);
	}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Palindroma</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

<body>
	<div class="container" style="margin-top: 20px;">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<form class="form-inline" method="POST" action="index.php">
					<label class="sr-only" for="inlineFormtext">Frase</label>
					<input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="text" id="inlineFormtext" placeholder="Frase">

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<?php 
		if (isset($isPalindroma) && $isPalindroma) {
			echo "è palindroma";
		}
	?>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>

</html>