<?php

/**
 * 正则表达式工具类
 * User: maosilu
 * Date: 2017/12/15
 * Time: 下午4:06
 */
class regexTool
{
    //存放常用正则表达式
    private $validate = array(
        'require'   =>  '/.+/',
        'email'     =>  '/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/',
        'url'       =>  '/^http(s?):\/\/(?:[A-za-z0-9-]+\.)+[A-za-z]{2,4}(?:[\/\?#][\/=\?%\-&~`@[\]\':+!\.#\w]*)?$/',
        'currency'  =>  '/^\d+(\.\d+)?$/',
        'number'    =>  '/^\d+$/',
        'zip'       =>  '/^\d{6}$/',
        'integer'   =>  '/^[-\+]?\d+$/',
        'double'    =>  '/^[-\+]?\d+(\.\d+)?$/',
        'english'   =>  '/^[A-Za-z]+$/',
        'qq'		=>	'/^\d{5,11}$/',
        'mobile'	=>	'/^1(3|4|5|7|8)\d{9}$/',
    );
    private $returnMatchResult = false;
    private $fixMode = null; //存放修正模式
    private $matches = array(); //匹配的结果数组
    private $isMatch = false; //验证的结果

    public function __construct($returnMatchResult= false, $fixMode = null)
    {
        $this->returnMatchResult= $returnMatchResult;
        $this->fixMode = $fixMode;
    }

    /**
     * 核心匹配方法
    */
    private function regex($pattern, $subject){
        
    }
}