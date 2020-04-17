<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Properties;

use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(...RangeSet::importRanges([0x5f], [0x203f, 0x2040], [0x2054], [0xfe33, 0xfe34], [0xfe4d, 0xfe4f], [0xff3f]));
