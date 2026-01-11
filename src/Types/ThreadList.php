<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class ThreadList extends JsonSerializableType
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
     * @var ?string $search Search term for title
     */
    #[JsonProperty('search')]
    public ?string $search;

    /**
     * @var ?string $tagId Filter by tag ID
     */
    #[JsonProperty('tagId')]
    public ?string $tagId;

    /**
     * @var ?string $userId Filter by author ID
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?value-of<ThreadListSort> $sort Sort criteria
     */
    #[JsonProperty('sort')]
    public ?string $sort;

    /**
     * @param array{
     *   limit?: ?float,
     *   cursor?: ?string,
     *   search?: ?string,
     *   tagId?: ?string,
     *   userId?: ?string,
     *   sort?: ?value-of<ThreadListSort>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->search = $values['search'] ?? null;
        $this->tagId = $values['tagId'] ?? null;
        $this->userId = $values['userId'] ?? null;
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
