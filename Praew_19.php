<body>
<pre style="font-family:mono;font-size:20px;">

<?php
for($r=1;$r<=5;$r++) {
	for($col=$r;$col<=$r;$col++) {
		echo($col);	
	}
	
	for($col=$r;$col<=9;$col++){
		echo("*");
	}
	for($col=2;$col<=$r;$col++){
		echo(" ");
	}
	
	for($col=$r;$col<=$r;$col++){
		echo(6-$r);
	}
	echo "\n";
?></pre></body>
