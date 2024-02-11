<?php

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Exception;

use OutOfRangeException;
use Throwable;

final class RangeSetNotFoundException extends OutOfRangeException implements ExceptionInterface
{
    public function __construct(
        private readonly string $propertyName,
        ?Throwable $previous = null,
    ) {
        parent::__construct("Range set not found for property '$this->propertyName'", previous: $previous);
    }

    public function getPropertyName(): string
    {
        return $this->propertyName;
    }
}
