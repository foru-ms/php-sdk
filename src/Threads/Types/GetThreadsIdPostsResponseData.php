<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetThreadsIdPostsResponseData extends JsonSerializableType
{
    /**
     * @var array<GetThreadsIdPostsResponseDataItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([GetThreadsIdPostsResponseDataItemsItem::class])]
    public array $items;

    /**
     * @var ?string $nextCursor
     */
    #[JsonProperty('nextCursor')]
    public ?string $nextCursor;

    /**
     * @var int $count
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @param array{
     *   items: array<GetThreadsIdPostsResponseDataItemsItem>,
     *   count: int,
     *   nextCursor?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->items = $values['items'];
        $this->nextCursor = $values['nextCursor'] ?? null;
        $this->count = $values['count'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
