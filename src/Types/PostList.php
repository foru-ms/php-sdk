<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostList extends JsonSerializableType
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
     * @var ?string $userId Filter posts by author ID
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?value-of<PostListSort> $sort Sort posts by creation time
     */
    #[JsonProperty('sort')]
    public ?string $sort;

    /**
     * @var ?string $search Search within post body
     */
    #[JsonProperty('search')]
    public ?string $search;

    /**
     * @var ?value-of<PostListType> $type Filter by interaction type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @param array{
     *   limit?: ?float,
     *   cursor?: ?string,
     *   userId?: ?string,
     *   sort?: ?value-of<PostListSort>,
     *   search?: ?string,
     *   type?: ?value-of<PostListType>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->search = $values['search'] ?? null;
        $this->type = $values['type'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
