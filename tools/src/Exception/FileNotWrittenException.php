<?php

declare(strict_types=1);

namespace Remorhaz\UCD\Tool\Exception;

use RuntimeException;
use Throwable;

final class FileNotWrittenException extends RuntimeException implements ExceptionInterface
{
    public function __construct(
        private string $fileName,
        ?Throwable $previous = null,
    ) {
        parent::__construct("Failed to write file: $this->fileName", 0, $previous);
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }
}
