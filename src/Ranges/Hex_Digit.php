<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Properties;

use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(...RangeSet::importRanges([0x30, 0x39], [0x41, 0x46], [0x61, 0x66], [0xff10, 0xff19], [0xff21, 0xff26], [0xff41, 0xff46]));
