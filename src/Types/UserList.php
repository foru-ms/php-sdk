<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class UserList extends JsonSerializableType
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
     * @var ?string $search Search by username or display name
     */
    #[JsonProperty('search')]
    public ?string $search;

    /**
     * @var ?value-of<UserListSort> $sort Sort by creation date
     */
    #[JsonProperty('sort')]
    public ?string $sort;

    /**
     * @param array{
     *   limit?: ?float,
     *   cursor?: ?string,
     *   search?: ?string,
     *   sort?: ?value-of<UserListSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->search = $values['search'] ?? null;
        $this->sort = $values['sort'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
