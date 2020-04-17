<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Properties;

use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(...RangeSet::importRanges([0x30a1, 0x30fa], [0x30fd, 0x30ff], [0x31f0, 0x31ff], [0x32d0, 0x32fe], [0x3300, 0x3357], [0xff66, 0xff6f], [0xff71, 0xff9d], [0x1b000], [0x1b164, 0x1b167]));
