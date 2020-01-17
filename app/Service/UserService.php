<?php
/**
 * Created by PhpStorm.
 * @Author: baiyinliang@styd.cn
 * @CreateTime 2019-10-23 16:33
 */

declare(strict_types=1);

namespace App\Service;


use App\Model\Info;

class UserService
{

    public function getInfoById(int $id)
    {
        return (new Info())->fill([$id]);
    }
}