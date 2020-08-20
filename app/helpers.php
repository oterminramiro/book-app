<?php

if (! function_exists('checkRole')) 
{
	function checkRole($array)
	{
		if (!in_array(auth()->user()->Role->key, $array))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}
