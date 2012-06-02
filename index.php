/**
OBP Flowers

Copyright 2012 Simon Redfern + Emily Wu

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.


*/





<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
		<?php
	//echo "hello world";
		$json=file_get_contents("https://demo.openbankproject.com/api/accounts/tesobe/anonymous");
		
		//echo $json;
		
		$data=json_decode($json);
		//[, bool $assoc = false [, int $depth = 512 [, int $options = 0 ]]] );
		//echo $data;
		
		//print_r($data);
		
		foreach ($data as $value){
			
		//echo "-----<br>";
		//print_r($value);
		
		//print_r($value->obp_transaction->details); //amount
		
		$x = $value->obp_transaction->details->value->amount;
		$abs_x = abs($x);
		$scale=0.3;
		$width=$abs_x*$scale;
		if ($x > 0) {
			echo "<img width=$width src=\"flower1.png\" border=0>";	
		} else if ($x < -500) 
			{
			echo "<img width=$width src=\"grass2.png\" border=0>";	
			} else {
				echo "<img width=$width src=\"grass1.png\" border=0>";
			}
			
		
	//	print_r ($x);
		
		}
		
		?>
    </body>
</html>
