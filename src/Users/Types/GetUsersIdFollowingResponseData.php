<?php

namespace ForuMs\Users\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetUsersIdFollowingResponseData extends JsonSerializableType
{
    /**
     * @var array<GetUsersIdFollowingResponseDataItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([GetUsersIdFollowingResponseDataItemsItem::class])]
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
     *   items: array<GetUsersIdFollowingResponseDataItemsItem>,
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
