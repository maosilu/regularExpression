<?php
/**
验证工具类：regesTool.class.php
*/
require_once 'regexTool.class.php';

$regex = new regexTool();
$regex->setFixMode('U');
$result = $regex->isMobile('13312345678');
show($result, true);

function show($var = null, $isdump = false){
	$func = $isdump ? 'var_dump' : 'print_r';
	if(empty($var)){
		echo 'null';
	}elseif(is_array($var) || is_object($var)){
		echo "<pre>";
		$func($var);
	}else{
		echo $var;
	}
}