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
     * @param string $pattern 要搜索的模式
     * @param string $subject
     * @return array|int
    */
    private function regex($pattern, $subject){
        if(array_key_exists(strtolower($pattern), $this->validate)){
            $pattern = $this->validate[$pattern];
        }

        $this->returnMatchResult ?
            preg_match_all($pattern, $subject, $this->matches) :
            preg_match($pattern, $subject) === 1;

        return $this->getRegexResult();
    }

    private function getRegexresult(){
        if($this->returnMatchResult){
            return $this->matches;
        }else{
            return $this->isMatch;
        }
    }

    /**
    返回值的类型
    */
    public function toggleReturnType($bool = null){
        if(empty($bool)){
            $this->returnMatchResult = !$this->returnMatchResult;
        }else{
            $this->returnMatchResult = is_bool($bool) ? $bool : (bool)$bool;
        }
    }

    /**
    修改修正模式
    */
    public function setFixMode($fixMode){
        $this->fixMode = $fixMode;
    }

    /**
    正则表达式非空验证
    */
    public function noEmpty($str){
        return $this->regex('require', $str);
    }

    public function isEmail($email){
        return $this->regex('email', $email);
    }

    public function isMobile($mobile){
        return $this->regex('mobile', $mobile);
    }

    /**
    用户自定义正则表达式的验证
    */
    public function check($pattern, $subject){
        return $this->regex($pattern, $subject);
    }
}