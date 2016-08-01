<?php 
if ( ! function_exists('array_random')) {

	/**
	 * 随机返回数组中的值
	 *
	 * @param  $array
	 *
	 * @return mixed
	 */
	function array_random($array)
	{
		return $array[array_rand($array)];
	}
}