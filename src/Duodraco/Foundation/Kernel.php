<?php

namespace Duodraco\Foundation;

use Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Routing\RouteCollectionBuilder;
use Symfony\Component\HttpKernel\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    use MicroKernelTrait;

    public function registerBundles(): array
    {
        $bundles = [
            new FrameworkBundle(),
            new SensioFrameworkExtraBundle()
        ];
        return $bundles;
    }

    protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
    {
        $loader->load(BASE_PATH . '/config/config.yml');
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $routes->import(
            BASE_PATH . '/src/Duodraco/Command/',
            '/',
            'annotation'
        );
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir() . '/base-app/cache';
    }

    public function getLogDir()
    {
        return sys_get_temp_dir() . '/base-app/logs';
    }

}