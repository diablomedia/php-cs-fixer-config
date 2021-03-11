<?php

use Ergebnis\PhpCsFixer\Config;
use DiabloMedia\PhpCsFixer\Config\RuleSet\Php74;

$config = Config\Factory::fromRuleSet(new Php74());

$config->setCacheFile(__DIR__ . '/.php_cs.cache');
$config->getFinder()
    ->exclude('vendor')
    ->files()
    ->in(__DIR__)
;

return $config;
