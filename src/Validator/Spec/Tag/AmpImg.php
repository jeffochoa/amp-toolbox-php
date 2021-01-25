<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpImg extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::IMG,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'alt',
            ],
            [
                SpecRule::NAME => 'attribution',
            ],
            [
                SpecRule::NAME => 'crossorigin',
            ],
            [
                SpecRule::NAME => 'object-fit',
            ],
            [
                SpecRule::NAME => 'object-position',
            ],
            [
                SpecRule::NAME => 'placeholder',
            ],
            [
                SpecRule::NAME => 'referrerpolicy',
            ],
            [
                SpecRule::NAME => '[alt]',
            ],
            [
                SpecRule::NAME => '[attribution]',
            ],
            [
                SpecRule::NAME => '[src]',
            ],
            [
                SpecRule::NAME => '[srcset]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
            'lightboxable-elements',
            'mandatory-src-or-srcset',
        ],
        SpecRule::SPEC_URL => 'https://amp.dev/documentation/components/amp-img/',
        SpecRule::AMP_LAYOUT => [
            'supportedLayouts' => [
                Layout::FILL,
                Layout::FIXED,
                Layout::FIXED_HEIGHT,
                Layout::FLEX_ITEM,
                Layout::INTRINSIC,
                Layout::NODISPLAY,
                Layout::RESPONSIVE,
            ],
        ],
        SpecRule::HTML_FORMAT => [
            Format::AMP,
            Format::AMP4ADS,
        ],
    ];
}
