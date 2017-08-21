<?php
/**
 * created by zhaoyi at 2017-08-20 15:39
 * made better by you.
 */
use OK\PhalconEnhance\Constant\BuiltinServiceName;
use OK\PhalconEnhance\Util\DiUtil;
use Phalcon\Di;
use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;
use Phalcon\Mvc\RouterInterface;
use Phalcon\Mvc\DispatcherInterface;

/**
 * @return DispatcherInterface
 */
function initDispatcher() {
    $di = new FactoryDefault();
    Di::setDefault($di);

    $loader = new Loader();
    $loader->registerNamespaces(
        include __DIR__ . "/../../../config/demo/namespace.php"
    )->register();

    $di->set(BuiltinServiceName::LOADER, $loader);

    DiUtil::initServices(include __DIR__ . "/../../../config/shared/services.php");
    DiUtil::initServices(include __DIR__ . "/../../../config/demo/services.php");

    /* @var RouterInterface $loader */
    $router = $di->get(BuiltinServiceName::ROUTER);
    $router->handle();

    /* @var DispatcherInterface $dispatcher */
    $dispatcher = $di->get(BuiltinServiceName::DISPATCHER);
    $dispatcher->setControllerName($router->getControllerName());
    $dispatcher->setActionName($router->getActionName());

    return $dispatcher;
}