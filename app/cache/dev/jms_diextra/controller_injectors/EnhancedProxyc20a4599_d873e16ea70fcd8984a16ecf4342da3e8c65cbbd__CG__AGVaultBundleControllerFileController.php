<?php

namespace EnhancedProxyc20a4599_d873e16ea70fcd8984a16ecf4342da3e8c65cbbd\__CG__\AG\VaultBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class FileController__JMSInjector
{
    public static function inject($container) {
        require_once __DIR__ . '/../proxies/AG-VaultBundle-Controller-FileController.php';
        $h = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('AG\\VaultBundle\\Controller\\FileController' => array('uploadAction' => array(0 => 'security.access.method_interceptor'), 'renameAction' => array(0 => 'security.access.method_interceptor'), 'removeAction' => array(0 => 'security.access.method_interceptor'), 'sendAction' => array(0 => 'security.access.method_interceptor'), 'moveAction' => array(0 => 'security.access.method_interceptor'), 'detailsAction' => array(0 => 'security.access.method_interceptor'), 'shareWithAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy84764c5e_d873e16ea70fcd8984a16ecf4342da3e8c65cbbd\__CG__\AG\VaultBundle\Controller\FileController();
        $instance->__CGInterception__setLoader($h);
        $refProperty = new \ReflectionProperty('AG\\VaultBundle\\Controller\\FileController', 'em');
        $refProperty->setAccessible(true);
        $refProperty->setValue($instance, $container->get('doctrine.orm.entity_manager', 1));
        $refProperty = new \ReflectionProperty('AG\\VaultBundle\\Controller\\FileController', 'request');
        $refProperty->setAccessible(true);
        $refProperty->setValue($instance, $container->get('request', 1));
        return $instance;
    }
}
