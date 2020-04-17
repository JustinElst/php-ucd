<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Properties;

use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(...RangeSet::importRanges([0x22], [0x27], [0xab], [0xbb], [0x2018, 0x201f], [0x2039, 0x203a], [0x2e42], [0x300c, 0x300f], [0x301d, 0x301f], [0xfe41, 0xfe44], [0xff02], [0xff07], [0xff62, 0xff63]));
