<?php

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Exception;

use LogicException;
use Throwable;

final class RangeSetNotBuiltException extends LogicException implements ExceptionInterface
{
    public function __construct(
        private readonly string $propertyName,
        ?Throwable $previous = null,
    ) {
        parent::__construct(
            message: "Failed to build range set for property '$this->propertyName'",
            previous: $previous,
        );
    }

    public function getPropertyName(): string
    {
        return $this->propertyName;
    }
}
