<?php

namespace DiabloMedia\PhpCsFixer\Config\RuleSet;

use Localheinz\PhpCsFixer\Config\RuleSet\AbstractRuleSet;

final class Php71 extends AbstractRuleSet
{
    protected $name = 'diablomedia (PHP 7.1)';

    protected $rules = [
        // Pre-defined rule sets
        '@PSR2' => true,
        '@PHP70Migration' => true,
        '@PHP71Migration' => true,
        '@PHP71Migration:risky' => true,
        '@PHPUnit60Migration:risky' => true,
        // Individual rules
        'array_syntax' => ['syntax' => 'short'],
        'binary_operator_spaces' => [
            'default' => 'align_single_space_minimal',
            'operators' => ['||' => null, '&&' => null, '==' => null, '===' => null, '+' => null]
        ],
        'concat_space' => ['spacing' => 'one'],
        'declare_strict_types' => false,
        'dir_constant' => true,
        'lowercase_static_reference' => true,
        'no_empty_comment' => true,
        'no_empty_phpdoc' => true,
        'no_leading_import_slash' => true,
        'no_mixed_echo_print' => ['use' => 'echo'],
        'no_superfluous_phpdoc_tags' => true,
        'no_unneeded_control_parentheses' => true,
        'no_unneeded_curly_braces' => true,
        'no_unused_imports' => true,
        'no_useless_return' => true,
        'ordered_class_elements' => true,
        'ordered_imports' => ['sort_algorithm' => 'alpha'],
        'php_unit_construct' => true,
        'psr0' => true,
        'return_type_declaration' => ['space_before' => 'none'],
        'single_quote' => false,
        'ternary_to_null_coalescing' => true,
    ];

    protected $targetPhpVersion = 70100;
}
