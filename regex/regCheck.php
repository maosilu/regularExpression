<?php
/**
验证工具类：regesTool.class.php
*/
require_once 'regexTool.class.php';

$regex = new regexTool();
$regex->setFixMode('U');
$result = $regex->isMobile('13312345678');
show($result);

function show($var = null){
	if(empty($var)){
		echo 'null';
	}elseif(is_array($var) || is_object($var)){
		echo "<pre>";
		print_r($var);
	}else{
		echo $var;
	}
}