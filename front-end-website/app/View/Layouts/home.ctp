<!DOCTYPE html>
<html>

	<?php
	 	echo $this->element('home/head');
	?>

<body>
	<?php
	 	echo $this->element('home/header');
	?>
	<?php
		echo $this->fetch('content');
	?>

</body>

</html>