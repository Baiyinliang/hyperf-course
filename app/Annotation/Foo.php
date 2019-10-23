<?php

declare(strict_types=1);

/**
 * Created by PhpStorm.
 * @Author: baiyinliang@styd.cn
 * @CreateTime 2019-10-23 17:55
 */

namespace App\Annotation;

use Doctrine\Common\Annotations\Annotation\Target;
use Hyperf\Di\Annotation\AbstractAnnotation;

/**
 * @Annotation
 * @Target({"CLASS","METHOD"})
 */
class Foo extends AbstractAnnotation
{
    /**
     * @var string
     */
    public $bar;

    /**
     * @var string
     */
    public $bag;

    public function __construct($value = null)
    {
        parent::__construct($value);
        //当`$bag`为可选参数时，需要用到下述方法
        $this->bindMainProperty('bar', $value);
    }


}