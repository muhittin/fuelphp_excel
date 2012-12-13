<?php
/**
 * FuelPHP Excel package.
 *
 * @package    Excel
 * @version    1.0
 * @author     Muhittin Özer
 * @link       http://www.muhittinozer.com
 */

/** PHPExcel root directory */
if (!defined('PHPEXCEL_ROOT')) {
	define('PHPEXCEL_ROOT', __DIR__.DS);
	require(PHPEXCEL_ROOT . 'PHPExcel'.DS.'Autoloader.php');
}

Autoloader::add_classes(array(
	'PHPExcel' => __DIR__.DS.'PHPExcel.php'
));

/*
 * End of file bootstrap.php
*/