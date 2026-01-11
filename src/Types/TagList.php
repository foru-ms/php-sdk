<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class TagList extends JsonSerializableType
{
    /**
     * @var ?float $limit Items per page (max 75)
     */
    #[JsonProperty('limit')]
    public ?float $limit;

    /**
     * @var ?string $cursor Cursor for pagination
     */
    #[JsonProperty('cursor')]
    public ?string $cursor;

    /**
     * @var ?string $search Search tags by name or description
     */
    #[JsonProperty('search')]
    public ?string $search;

    /**
     * @param array{
     *   limit?: ?float,
     *   cursor?: ?string,
     *   search?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->search = $values['search'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
