<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Format;
use AmpProject\Tag as Element;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class ScriptCustomElementAmpLightboxAmp4email extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Element::SCRIPT,
        SpecRule::SPEC_NAME => 'SCRIPT[custom-element=amp-lightbox] (AMP4EMAIL)',
        SpecRule::ATTR_LISTS => [
            'common-extension-attrs',
        ],
        SpecRule::DEPRECATION => 'amp-lightbox cannot be properly positioned in emails and will soon be invalid in AMP4EMAIL.',
        SpecRule::DEPRECATION_URL => 'https://github.com/ampproject/amphtml/issues/23170',
        SpecRule::HTML_FORMAT => [
            Format::AMP4EMAIL,
        ],
        SpecRule::EXTENSION_SPEC => [
            SpecRule::NAME => 'amp-lightbox',
            SpecRule::VERSION => [
                '0.1',
                'latest',
            ],
        ],
    ];
}
