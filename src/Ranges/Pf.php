<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Properties;

use Remorhaz\IntRangeSets\RangeSet;

/** phpcs:disable Generic.Files.LineLength.TooLong */
return RangeSet::createUnsafe(...RangeSet::importRanges([0xbb], [0x2019], [0x201d], [0x203a], [0x2e03], [0x2e05], [0x2e0a], [0x2e0d], [0x2e1d], [0x2e21]));
