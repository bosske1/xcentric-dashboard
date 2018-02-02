<?php

namespace Xcentric\Bundle\XcentricDashboardBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\Console\Application;

/**
 * Class XcentricDashboardBundle
 * @package Xcentric\Bundle\XcentricDashboardBundle
 */
class XcentricDashboardBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }

    /**
     * {@inheritdoc}
     */
    public function registerCommands(Application $application)
    {
        // noop
    }
}