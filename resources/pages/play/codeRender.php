<?php
	$code = $_POST['code_html'];
	if (!isset($code)){
		/*echo <!DOCTYPE html><html><head><style>body{background-color: white;}</style>";
		echo </head>";
		echo <body><h1>."He".</h1><br><p>."Hellod".</p></body></html>";
	    echo "&lt;body&gt;"."<br>";
	    echo "&lt;h1&gt;"."Hellow"."&lt;/h1&gt;"."<br>";
		echo "&lt;/body&gt;"."<br>";
		echo "&lt;/html&gt;"."<br>";*/
	}else{
	echo '<h1>';
	echo $code;
	echo '</h1>';
	}

?>