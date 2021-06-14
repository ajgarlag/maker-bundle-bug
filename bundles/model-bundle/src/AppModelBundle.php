<?php

namespace App\Bundle\ModelBundle;

use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AppModelBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $namespaces = ['App\Bundle\ModelBundle\Model'];
        $paths = [$this->getPath().'/Model'];
        $container->addCompilerPass(
            DoctrineOrmMappingsPass::createAnnotationMappingDriver($namespaces, $paths)
        );
    }
}
