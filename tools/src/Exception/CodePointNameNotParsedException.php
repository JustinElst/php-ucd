<?php

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Exception;

use LogicException;
use Throwable;

final class CodePointNameNotParsedException extends LogicException implements ExceptionInterface
{
    public function __construct(
        private string $name,
        ?Throwable $previous = null,
    ) {
        parent::__construct("Failed to parse code point name: $name", 0, $previous);
    }

    public function getName(): string
    {
        return $this->name;
    }
}
