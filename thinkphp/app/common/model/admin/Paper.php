<?php

namespace app\common\model\admin;

use think\Model;
use think\Db;

class Paper extends Model{
    public function getlist(){
        return $this->select();
    }
}