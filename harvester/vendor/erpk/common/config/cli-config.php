<?php
require_once __DIR__.'/../vendor/autoload.php';

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Erpk\Common\EntityManager;

$entityManager = new EntityManager();

return ConsoleRunner::createHelperSet($entityManager);
