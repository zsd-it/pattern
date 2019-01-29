<?php
/**
 * Created by PhpStorm.
 * User: zsd
 * Date: 2019/1/29
 * Time: 下午5:28
 */

namespace Factory;

class Man extends People
{
    public function measure()
    {
        $this->name   = '张三';
        $this->weight = '80kg';
        $this->height = '178cm';
    }
}
