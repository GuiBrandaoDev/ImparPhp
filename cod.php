<?php
	$y = $_POST['num'];
	
	for($i=1; $i <= $y; $i++){
		if($i % 2 == 0){
			continue;
		}
		echo "<strong>O numero impar é:".$i."<br></strong>";
	}
?>