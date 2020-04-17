<?php

declare(strict_types=1);

namespace Remorhaz\UCD\Exception;

use OutOfRangeException;
use Throwable;

final class PropertyRangeSetNotFoundException extends OutOfRangeException implements ExceptionInterface
{

    /**
     * @var string
     */
    private $propertyName;

    public function __construct(string $propertyName, Throwable $previous = null)
    {
        $this->propertyName = $propertyName;
        parent::__construct("Range set not found for Unicode property '{$this->propertyName}'", 0, $previous);
    }

    public function getPropertyName(): string
    {
        return $this->propertyName;
    }
}
