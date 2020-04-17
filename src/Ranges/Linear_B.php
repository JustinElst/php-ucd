<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Properties;

use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(...RangeSet::importRanges([0x10000, 0x1000b], [0x1000d, 0x10026], [0x10028, 0x1003a], [0x1003c, 0x1003d], [0x1003f, 0x1004d], [0x10050, 0x1005d], [0x10080, 0x100fa]));
