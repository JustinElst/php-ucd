<?php

declare(strict_types=1);

namespace Remorhaz\UCD;

use Remorhaz\IntRangeSets\RangeSetInterface;

interface PropertyRangeLoaderInterface
{
    public function getRangeSet(string $propertyName): RangeSetInterface;
}
