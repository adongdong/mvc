<?php
namespace app\ctrl;

class indexCtrl  extends  \core\imooc
{
    public function index(){
//        p('it is index');
//        $model = new \core\lib\model();
//        $sql ="select * from table";
//        $ret = $model -> query($sql);
//        p($ret->fetchAll());
        $data = 'haha';
        $this->assign('data',$data);
        $this->assign('huijia','山西省运城市桐城镇西李房村49号');
        $this->display('index.html');

    }
}