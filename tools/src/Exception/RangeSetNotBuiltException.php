<?php

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Exception;

use LogicException;
use Throwable;

final class RangeSetNotBuiltException extends LogicException implements ExceptionInterface
{
    public function __construct(
        private string $propertyName,
        ?Throwable $previous = null,
    ) {
        parent::__construct(
            "Failed to build range set for property '$this->propertyName'",
            0,
            $previous
        );
    }

    public function getPropertyName(): string
    {
        return $this->propertyName;
    }
}
