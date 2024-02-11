<?php

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Exception;

use RuntimeException;
use Throwable;

final class LineNotReadException extends RuntimeException implements ExceptionInterface
{
    public function __construct(
        private readonly string $fileName,
        ?Throwable $previous = null,
    ) {
        parent::__construct("Failed reading line from file: $this->fileName", previous: $previous);
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }
}
