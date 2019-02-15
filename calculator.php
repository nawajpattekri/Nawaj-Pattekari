<?php
	
	class base_class{
		
		function checkCommand($argv){
			if(!empty($argv[1])){
				if(!empty($argv[2])){

					if($argv[1]=='sum' || $argv[1]=='add'){
						$this->makeAddition($argv[2]);
					}else{
						echo 'Please provide valied command.';	
					}
				}else{
					echo 'Please provide valied command.';
				}
				

			}else{
				echo 'Please Enter Command.';
			}
		}

	}
	
	//class add wich is extends all properties of base_class
	class add extends base_class
	{
		//function foe make additions for entered number
		function makeAddition($inputs){
			if(strpos($inputs, ",") !== FALSE || strpos($inputs, ";") !== FALSE) {
					$parameters = preg_replace('/[^0-9\-]/', ',', $inputs); // Removes special chars.
					$parameters = str_replace('\n',',',$parameters);
				  	$parameters = explode(',', $parameters);
				  	$sum 		= array_sum($parameters);
					echo $sum;
				} else if( is_numeric($inputs))  {
				 	 echo $inputs;
			}else{
				echo'please provide valied inputs';
			}
		}
		
	}

	//create object for class add
	$addition = new add;
	echo $addition->checkCommand($argv);
?>