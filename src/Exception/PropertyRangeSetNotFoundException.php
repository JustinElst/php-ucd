<?php

declare(strict_types=1);

namespace Remorhaz\UCD\Exception;

use OutOfRangeException;
use Throwable;

final class PropertyRangeSetNotFoundException extends OutOfRangeException implements ExceptionInterface
{
    public function __construct(
        private string $propertyName,
        ?Throwable $previous = null,
    ) {
        parent::__construct("Range set not found for Unicode property '$this->propertyName'", 0, $previous);
    }

    public function getPropertyName(): string
    {
        return $this->propertyName;
    }
}
