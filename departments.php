<?php


$arrayofclasses = array(
	"IS" => array('IS450','IS448','IS247','IS310'),	
	"BIO" => array('BIOL101','BIOL102','BIOL103'),
    "ECON" => array('ECON100','ECON101','ECON102')
    );

//get the 'type' parameter from URL
$department=$_GET["type"];


$class="";
foreach ($arrayofclasses as $key => $value)
{
	if($key == $department){
		foreach ($value as $element)
		{
			if($class == ""){
				$class = $element;
			}
			else{
				$class = $class . "<br />" . $element;
			}
		}
	}
}
echo $class;


?>