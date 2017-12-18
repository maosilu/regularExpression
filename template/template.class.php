<?php

/**
 * 山寨版smarty模版引擎的类文件
 * User: maosilu
 * Date: 2017/12/18
 * Time: 下午2:52
 */
class template
{
    private $templateDir; //模版引擎源文件的存放目录
    private $compiled; //模版引擎编译后文件的存放目录
    private $leftTag = '{#'; //模版文件中需要替换掉的变量
    private $rightTag = '#}';
    private $currentTemp = ''; //当前正在编译的模版文件名
    private $outputHtml; //当前正在编译的模版文件中的html代码
    private $varPool = array(); //变量池
}