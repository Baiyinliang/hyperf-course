<?php
/**
 * Created by PhpStorm.
 * @Author: baiyinliang@styd.cn
 * @CreateTime 2019-10-23 18:51
 */

declare(strict_types=1);

namespace App\Controller;

use App\Annotation\Foo;
use Hyperf\Di\Annotation\AnnotationCollector;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController()
 * @Foo("白小白")
 */
class AnnotationController extends AbstractController
{

    public function index(){
        var_dump(AnnotationCollector::getClassByAnnotation(Foo::class));
        return 1;
    }

}