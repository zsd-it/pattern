<?php
/**
 * Created by PhpStorm.
 * User: zsd
 * Date: 2019/1/29
 * Time: 下午5:28
 */

namespace Factory;

class Woman extends People
{
    public function measure()
    {
        $this->name   = '李四';
        $this->weight = '80kg';
        $this->height = '178cm';
    }
}
