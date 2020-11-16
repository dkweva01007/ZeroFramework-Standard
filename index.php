<?php 
  
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

define('DIR_ROOT', __DIR__.DIRECTORY_SEPARATOR);

use ZeroBundle\Bundle\Kernel;

use ZeroBundle\Bundle\BundleRoute;

BundleRoute::getInstance();

$kernel = new Kernel();
$kernel->start();
  
