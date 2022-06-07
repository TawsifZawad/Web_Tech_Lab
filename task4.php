<?php 

$a=20;
$b=45;
$c=20;

if($a==$b && $b==$c)
	{
	
		echo "all the numbers are same value";
	}		
 else if ($a>$b&& $a>$c)
	{
		echo "Largest number is :", $a;
	}	
 else if($b>$a&&$b>$c)
	{
		echo "Largest number is :",$b;
	}
		
else
	{
		echo "Largest number is :",$c;
	}
		
?>