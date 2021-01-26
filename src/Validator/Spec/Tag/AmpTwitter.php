<?php

/**
 * DO NOT EDIT!
 * This file was automatically generated via bin/generate-validator-spec.php.
 */

namespace AmpProject\Validator\Spec\Tag;

use AmpProject\Attribute;
use AmpProject\Extension;
use AmpProject\Format;
use AmpProject\Layout;
use AmpProject\Protocol;
use AmpProject\Validator\Spec\SpecRule;
use AmpProject\Validator\Spec\Tag;

final class AmpTwitter extends Tag
{
    const SPEC = [
        SpecRule::TAG_NAME => Extension::TWITTER,
        SpecRule::ATTRS => [
            [
                SpecRule::NAME => 'data-cards',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TWEETID,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'data-conversation',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TWEETID,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'data-limit',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_MOMENTID,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'data-momentid',
                SpecRule::MANDATORY_ONEOF => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
                SpecRule::VALUE_REGEX => '\d+',
            ],
            [
                SpecRule::NAME => 'data-timeline-id',
                SpecRule::VALUE_REGEX => '\d+',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'data-timeline-owner-screen-name',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'data-timeline-slug',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'data-timeline-source-type',
                SpecRule::MANDATORY_ONEOF => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
            ],
            [
                SpecRule::NAME => 'data-timeline-screen-name',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'data-timeline-url',
                SpecRule::VALUE_URL => [
                    SpecRule::PROTOCOL => [
                        Protocol::HTTP,
                        Protocol::HTTPS,
                    ],
                    SpecRule::ALLOW_RELATIVE => false,
                ],
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'data-timeline-user-id',
                SpecRule::VALUE_REGEX => '\d+',
                SpecRule::TRIGGER => [
                    SpecRule::ALSO_REQUIRES_ATTR => [
                        Attribute::DATA_TIMELINE_SOURCE_TYPE,
                    ],
                ],
            ],
            [
                SpecRule::NAME => 'data-tweetid',
                SpecRule::MANDATORY_ONEOF => '[\'data-momentid\', \'data-timeline-source-type\', \'data-tweetid\']',
            ],
            [
                SpecRule::NAME => '[data-tweetid]',
            ],
        ],
        SpecRule::ATTR_LISTS => [
            'extended-amp-global',
        ],
        SpecRule::AMP_LAYOUT => [
            SpecRule::SUPPORTED_LAYOUTS => [
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
        ],
        SpecRule::REQUIRES_EXTENSION => [
            Extension::TWITTER,
        ],
    ];
}
