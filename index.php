<?php

use Go\ParserReflection\ReflectionEngine;

require __DIR__ . '/vendor/autoload.php';

$result = ReflectionEngine::parseFile(__DIR__ . '/vendor/doctrine/persistence/lib/Doctrine/Common/Persistence/ObjectRepository.php');

$result = ReflectionEngine::parseClass(\Doctrine\Common\Persistence\ObjectRepository::class);

var_dump($result);
