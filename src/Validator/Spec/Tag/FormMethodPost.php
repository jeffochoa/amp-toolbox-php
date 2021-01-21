<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

final class FormMethodPost
{
    const SPEC = "[\nSpecRule::TAG_NAME => Element::FORM,\nSpecRule::SPEC_NAME => 'FORM [method=POST]',\nSpecRule::ATTRS => [\n    [\n        SpecRule::NAME => Attribute::ACCEPT,\n    ],\n    [\n        SpecRule::NAME => Attribute::ACCEPT_CHARSET,\n    ],\n    [\n        SpecRule::NAME => Attribute::ACTION_XHR,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::AUTOCOMPLETE,\n    ],\n    [\n        SpecRule::NAME => Attribute::CUSTOM_VALIDATION_REPORTING,\n        SpecRule::VALUE => [\n                        'as-you-go',\n                        'interact-and-submit',\n                        'show-all-on-submit',\n                        'show-first-on-submit',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::ENCTYPE,\n    ],\n    [\n        SpecRule::NAME => Attribute::METHOD,\n        SpecRule::MANDATORY => true,\n        SpecRule::DISPATCH_KEY => 'NAME_VALUE_DISPATCH',\n        SpecRule::VALUE_CASEI => [\n                        'post',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::NOVALIDATE,\n    ],\n    [\n        SpecRule::NAME => Attribute::TARGET,\n        SpecRule::VALUE_CASEI => [\n                        '_blank',\n                        '_top',\n                    ],\n    ],\n    [\n        SpecRule::NAME => Attribute::VERIFY_XHR,\n        SpecRule::DISALLOWED_VALUE_REGEX => '__amp_source_origin',\n        SpecRule::VALUE_URL => [\n                        SpecRule::PROTOCOL => [\n                            'https',\n                        ],\n                    ],\n    ],\n],\nSpecRule::ATTR_LISTS => [\n                'form-name-attr',\n            ],\nSpecRule::DISALLOWED_ANCESTOR => [\n                'AMP-APP-BANNER',\n            ],\nSpecRule::HTML_FORMAT => [\n                Format::AMP,\n                Format::AMP4ADS,\n            ],\nSpecRule::REQUIRES_EXTENSION => [\n                'amp-form',\n            ],\n];";
}
