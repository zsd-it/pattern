<?php
/**
 * Created by PhpStorm.
 * User: zsd
 * Date: 2019/1/29
 * Time: 下午5:32
 */

namespace Factory;

class PeopleFactory implements Factory
{
    /**
     * 工厂模式 - 创建一个人物信息.
     *
     * @param $sex
     *
     * @return \Factory\Man|\Factory\Woman
     * @throws \Exception
     */
    public function createPeople($sex)
    {
        if ($sex = 'man') {
            return new Man();
        }

        if ($sex = 'woman') {
            return new Woman();
        }

        throw new \Exception('不支持的性别');
    }
}
