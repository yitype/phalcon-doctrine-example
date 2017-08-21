<?php
/**
 * created by zhaoyi at 2017-08-20 19:55
 * made better by you.
 */

use Doctrine\Common\Cache\FilesystemCache;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use OK\PhalconEnhance\Constant\BuiltinServiceName;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\Router;
use Phalcon\Session\Adapter\Files as SessionFiles;

return [
    [
        BuiltinServiceName::ROUTER,
        function () {
            $router = new Router();
            $router->removeExtraSlashes(true);
            $router->setUriSource(Router::URI_SOURCE_SERVER_REQUEST_URI);

            return $router;
        }
    ],
    [
        BuiltinServiceName::DISPATCHER,
        function () {
            $dispatcher = new Dispatcher();
            $dispatcher->setDefaultNamespace('Example\App\Demo\Controller');

            return $dispatcher;
        }
    ],
    [
        BuiltinServiceName::SESSION,
        function () {
            $session = new SessionFiles(["uniqueId" => "example-demo-app"]);
            ini_set('session.save_handler', 'files');
            ini_set('session.save_path', __DIR__ . '/../../var/session/');
            $session->start();

            return $session;
        }
    ],
    [
        'em_demo',
        function () {
            $isDevMode = false;
            $paths     = include __DIR__ . '/db_meta_data.php';
            $conn      = include __DIR__ . '/db.php';

            $cache = new FilesystemCache(__DIR__ . '/../../var/cache/doctrine');

            // Create a Doctrine ORM configuration for YAML
            $config = Setup::createYAMLMetadataConfiguration($paths, $isDevMode, null, $cache);

            // obtaining the entity manager
            return EntityManager::create($conn, $config);
        }
    ]
];