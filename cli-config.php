<?php
/**
 * created by zhaoyi at 2017-08-20 21:45
 * made better by you.
 */

require_once __DIR__ . "/config/doctrine-bootstrap.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
