<?php
use Illuminate\Support\Collection;


function GeneratePassword($n=5, $k=0)
{
	$arr = array('A','B','C','D','E','F',
				 'G','H','J','K',
				 'M','N','P','R','S',
				 'T','U','V','X','Y','Z');
	$pass = "";
	for($i = 0; $i < $n; $i++)
	{
	  $index = rand(0, count($arr) - 1);
	  $pass .= $arr[$index];
	}

	if($k === 1)
		$pass .= rand(2, 9);

	$pass .= rand(2, 9);

	return $pass;
}
