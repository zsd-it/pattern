<?php

/**
 * Created by PhpStorm.
 * User: zsd
 * Date: 2019/1/29
 * Time: 下午5:26
 */

namespace Factory;

abstract class People
{
    public $weight;
    public $height;
    public $name;

    abstract public function measure();
}
