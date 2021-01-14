<?php

declare(strict_types=1);

namespace Remorhaz\UCD;

use Remorhaz\IntRangeSets\RangeSetInterface;

use function error_clear_last;
use function error_get_last;
use function is_string;

final class PropertyRangeLoader implements PropertyRangeLoaderInterface
{

    /**
     * @var string
     */
    private $path;

    /**
     * @var string[]
     * @psalm-var array<string, mixed>
     */
    private $index;

    /**
     * @var RangeSetInterface[]
     */
    private $cache = [];

    public static function create(): self
    {
        /** @psalm-var array<string, string> $index */
        $index = require __DIR__ . '/../config/ranges.php';

        return new self(__DIR__, $index);
    }

    /**
     * @param string                     $path
     * @param array                      $index
     * @psalm-param array<string, string> $index
     */
    public function __construct(string $path, array $index)
    {
        $this->path = $path;
        $this->index = $index;
    }

    public function getRangeSet(string $propertyName): RangeSetInterface
    {
        if (!isset($this->cache[$propertyName])) {
            $this->cache[$propertyName] = $this->loadRangeSet($propertyName);
        }

        return $this->cache[$propertyName];
    }

    private function loadRangeSet(string $propertyName): RangeSetInterface
    {
        if (!isset($this->index[$propertyName])) {
            throw new Exception\PropertyRangeSetNotFoundException($propertyName);
        }

        /** @var mixed $file */
        $file = $this->index[$propertyName];
        if (!is_string($file)) {
            throw new Exception\InvalidPropertyConfigException($propertyName, $file);
        }
        $fileName = $this->path . $file;
        error_clear_last();
        /**
         * @noinspection   PhpIncludeInspection
         * @psalm-suppress UnresolvableInclude
         * @var RangeSetInterface|false $rangeSet
         */
        $rangeSet = @include $fileName;
        if (false === $rangeSet) {
            $lastError = error_get_last();
            if (isset($lastError)) {
                throw new Exception\PropertyFileNotLoadedException(
                    $propertyName,
                    $fileName,
                    $lastError['message'] ?? null
                );
            }
        }
        if ($rangeSet instanceof RangeSetInterface) {
            return $rangeSet;
        }

        throw new Exception\InvalidPropertyRangeSetException($propertyName, $fileName, $rangeSet);
    }
}
