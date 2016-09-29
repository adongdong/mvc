<?php
namespace core\lib;

class route
{
    public $ctrl;
    public $action;
    public function   __construct(){

       //p($_SERVER);
        /*
         * 1.隐藏index.php
         * 2.获取 url参数部分
         * 3.返回对应控制名称
         */
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!='/'){
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/',trim($path,'/'));
            //p($patharr);
            unset($patharr[0]);
            if(isset($patharr[1])){
                $this->ctrl =$patharr[1];
            }
            unset($patharr[1]);
            if(isset($patharr[2])){
                $this->action =$patharr[2];
                unset($patharr[2]);
            }else{
                $this->action='index';
            }
           // p($patharr);
            $count=count($patharr)+2;
            $i=3;
            while($i< $count){
                if(isset($patharr[$i +1])){
                    $_GET[$patharr[$i]] = $patharr[$i+1];
                }
                $i =$i +2;
            }
           // p($_GET);
        }else{
            $this->ctrl = 'index';
            $this->action = 'index';
        }
    }
}