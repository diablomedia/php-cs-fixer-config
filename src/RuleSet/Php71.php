<?php

namespace DiabloMedia\PhpCsFixer\Config\RuleSet;

use Localheinz\PhpCsFixer\Config\RuleSet\AbstractRuleSet;

final class Php71 extends AbstractRuleSet
{
    protected $name = 'diablomedia (PHP 7.1)';

    protected $rules = [
        '@PSR2' => true,
        '@PHP70Migration' => true,
        '@PHP71Migration' => true,
        '@PHP71Migration:risky' => true,
        '@PHPUnit60Migration:risky' => true,
        'binary_operator_spaces' => [
            'default' => 'align_single_space_minimal',
            'operators' => ['||' => null, '&&' => null, '==' => null, '===' => null, '+' => null]
        ],
        'single_quote' => false,
        'array_syntax' => ['syntax' => 'short'],
        'concat_space' => ['spacing' => 'one'],
        'dir_constant' => true,
        'psr0' => true,
        'no_unused_imports' => true,
        'declare_strict_types' => false,
        'return_type_declaration' => ['space_before' => 'none'],
        'no_superfluous_phpdoc_tags' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
    ];

    protected $targetPhpVersion = 70100;
}
