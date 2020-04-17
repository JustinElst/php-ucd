<?php

declare(strict_types=1);

namespace Remorhaz\UCD\Tool;

use Remorhaz\UCD\Tool\Console\BuildPropertiesCommand;
use Symfony\Component\Console\Application;

require_once __DIR__ . '/../../vendor/autoload.php';

$app = new Application("PHP UCD: Unicode Property Builder");
$buildCommand = new BuildPropertiesCommand();
$app->add($buildCommand);
$app->setDefaultCommand($buildCommand->getName());
unset($buildCommand);
/** @noinspection PhpUnhandledExceptionInspection */
$app->run();
