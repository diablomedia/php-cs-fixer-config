<?php

namespace DiabloMedia\PhpCsFixer\Config\RuleSet;

use Ergebnis\PhpCsFixer\Config\RuleSet\AbstractRuleSet;

final class Php80 extends AbstractRuleSet
{
    protected string $name = 'diablomedia (PHP 8.0)';

    protected array $rules = [
        // Pre-defined rule sets
        '@PSR2'                     => true,
        '@PSR12'                    => true,
        '@PSR12:risky'              => true,
        '@PHP70Migration'           => true,
        '@PHP71Migration'           => true,
        '@PHP71Migration:risky'     => true,
        '@PHP73Migration'           => true,
        '@PHP74Migration'           => true,
        '@PHP74Migration:risky'     => true,
        '@PHP80Migration'           => true,
        '@PHP80Migration:risky'     => true,
        '@PHPUnit60Migration:risky' => true,
        '@PHPUnit75Migration:risky' => true,
        '@PHPUnit84Migration:risky' => true,
        // Individual rules
        'array_syntax'           => ['syntax' => 'short'],
        'binary_operator_spaces' => [
            'default'   => 'align_single_space_minimal',
            'operators' => ['||' => null, '&&' => null, '==' => null, '===' => null, '+' => null],
        ],
        'class_attributes_separation'     => true,
        'concat_space'                    => ['spacing' => 'one'],
        'declare_strict_types'            => false,
        'dir_constant'                    => true,
        'lowercase_static_reference'      => true,
        'no_empty_comment'                => true,
        'no_empty_phpdoc'                 => true,
        'no_leading_import_slash'         => true,
        'no_mixed_echo_print'             => ['use' => 'echo'],
        'no_superfluous_phpdoc_tags'      => ['allow_mixed' => true],
        'no_unneeded_control_parentheses' => true,
        'no_unneeded_curly_braces'        => true,
        'no_unused_imports'               => true,
        'no_useless_return'               => true,
        'ordered_class_elements'          => [
            'order' => [
                'use_trait',
                'constant_public',
                'constant_protected',
                'constant_private',
                'property_public',
                'property_protected',
                'property_private',
                'construct',
                'destruct',
                'magic',
                'phpunit',
                'method_public',
                'method_protected',
                'method_private',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'ordered_imports' => [
            'imports_order' => [
                'const',
                'class',
                'function',
            ],
            'sort_algorithm' => 'alpha',
        ],
        'php_unit_construct'         => true,
        'return_type_declaration'    => ['space_before' => 'none'],
        'single_quote'               => false,
        'ternary_to_null_coalescing' => true,
    ];

    protected int $targetPhpVersion = 80000;
}
