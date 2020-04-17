<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Properties;

use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(...RangeSet::importRanges([0xab], [0x2018], [0x201b, 0x201c], [0x201f], [0x2039], [0x2e02], [0x2e04], [0x2e09], [0x2e0c], [0x2e1c], [0x2e20]));
