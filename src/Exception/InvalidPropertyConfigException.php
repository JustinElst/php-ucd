<?php

declare(strict_types=1);

namespace Remorhaz\UCD\Exception;

use DomainException;
use Throwable;

use function gettype;

final class InvalidPropertyConfigException extends DomainException implements ExceptionInterface
{

    /**
     * @var string
     */
    private $propertyName;

    /**
     * @var mixed
     */
    private $propertyFile;

    /**
     * InvalidPropertyConfigException constructor.
     *
     * @param string         $propertyName
     * @param mixed          $propertyFile
     * @param Throwable|null $previous
     */
    public function __construct(string $propertyName, $propertyFile, Throwable $previous = null)
    {
        $this->propertyName = $propertyName;
        $this->propertyFile = $propertyFile;
        parent::__construct($this->buildMessage(), 0, $previous);
    }

    private function buildMessage(): string
    {
        $fileNameType = gettype($this->propertyFile);

        return
            "Invalid config for Unicode property '{$this->propertyName}': " .
            "{$fileNameType} instead of string filename";
    }

    public function getPropertyName(): string
    {
        return $this->propertyName;
    }

    /**
     * @return mixed
     */
    public function getPropertyFile()
    {
        return $this->propertyFile;
    }
}
