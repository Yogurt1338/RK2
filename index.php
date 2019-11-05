<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>

	<?php

	$s= "No";
	$v= "No";
	if (isset($_POST['s'])) $s=a*b;
	if (isset($_POST['v'])) $v=a*b*c;

	if (isset($_POST['s'])) {echo "S:"; echo $s; }
	if (isset($_POST['V'])) {echo "V:"; echo $v; }
	?>
	<?php

echo "</br>";

	for ($i=1;$i<101;$i++)
	{
		for ($i=1;$i<101;$i++)
		{
		$Q=$i*$i;
		$T=$i*$i*$i;
		echo "число:", $i, "квадрат:",$Q , "куб:" ,$T,  "</br>" ;

		}
	}

	?>	
</body>
</html>
