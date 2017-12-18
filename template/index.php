<?php
/**
 * Created by PhpStorm.
 * User: maosilu
 * Date: 2017/12/18
 * Time: 下午7:50
 */
require_once 'template.class.php';

$baseDir = str_replace('//', '/', dirname(__FILE__));

$temp = new template($baseDir.'/source/', $baseDir.'/compiled/');
$temp->assign('pagetitle', '山寨版smarty');
$temp->assign('test', 'imooc女神');

$temp->getSourceTemplate('index');
$temp->compileTemplate();
$temp->display();