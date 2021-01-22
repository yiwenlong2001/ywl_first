<?php
namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index(){
        $db = new \app\common\model\admin\Paper();
        $rs = $db->getlist();
//        $p = [];
//        $i = 0;
//        foreach($rs as $paper){
//            echo "{$paper['paper_id']}-{$paper['title']}-{$paper['year']}<br />";
//            $p[$i++] = $paper['title'];
//        }
//        return var_dump($p);
        return($rs); 
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,你好' . $name;
    }

}
