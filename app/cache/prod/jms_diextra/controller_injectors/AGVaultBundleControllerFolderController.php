<?php

namespace AG\VaultBundle\Controller;

/**
 * This code has been auto-generated by the JMSDiExtraBundle.
 *
 * Manual changes to it will be lost.
 */
class FolderController__JMSInjector
{
    public static function inject($container) {
        require_once __DIR__ . '/../proxies/AG-VaultBundle-Controller-FolderController.php';
        $c = new \JMS\AopBundle\Aop\InterceptorLoader($container, array('AG\\VaultBundle\\Controller\\FolderController' => array('indexAction' => array(0 => 'security.access.method_interceptor'), 'editAction' => array(0 => 'security.access.method_interceptor'), 'removeAction' => array(0 => 'security.access.method_interceptor'), 'renameAction' => array(0 => 'security.access.method_interceptor'), 'moveAction' => array(0 => 'security.access.method_interceptor'))));
        $instance = new \EnhancedProxy539f5f81_66223aff406759371a9caa6b7e4baa9bb3372efb\__CG__\AG\VaultBundle\Controller\FolderController();
        $instance->__CGInterception__setLoader($c);
        $refProperty = new \ReflectionProperty('AG\\VaultBundle\\Controller\\FolderController', 'em');
        $refProperty->setAccessible(true);
        $refProperty->setValue($instance, $container->get('doctrine.orm.entity_manager', 1));
        $refProperty = new \ReflectionProperty('AG\\VaultBundle\\Controller\\FolderController', 'request');
        $refProperty->setAccessible(true);
        $refProperty->setValue($instance, $container->get('request', 1));
        return $instance;
    }
}
