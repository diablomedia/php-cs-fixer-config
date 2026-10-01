<?php

use Ergebnis\PhpCsFixer\Config;
use DiabloMedia\PhpCsFixer\Config\RuleSet\Php82;

$config = Config\Factory::fromRuleSet(Php82::create());

$config->setUnsupportedPhpVersionAllowed(true);

$config->setCacheFile(__DIR__ . '/.php_cs.cache');
$config->getFinder()    
    ->exclude('vendor')
    ->files()
    ->in(__DIR__)
;

return $config;
