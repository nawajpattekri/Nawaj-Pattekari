<?php
	
	//check user entered command is empty or not
	if(!empty($argv[1])){
		if($argv[1]=='sum'){
			if(!empty($argv[2])){ 
				if(strpos($argv[2], ",") !== FALSE) {
				  	$parameters=explode(',', $argv[2]);
				  	$sum=array_sum($parameters);
					echo $sum;
				} else if( is_numeric($argv[2]))  {
				 	 echo $argv[2];
				}else{
					echo'please provide valied inputs';
				}
			}
		}else{
			echo 'Please Provide Valied Command';
		}

	}else{
		echo 'Please Enter Command.';
	}
	
?>