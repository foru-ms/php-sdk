<?php

namespace ForuMs\PrivateMessages\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetPrivateMessagesIdRepliesResponseData extends JsonSerializableType
{
    /**
     * @var array<GetPrivateMessagesIdRepliesResponseDataItemsItem> $items
     */
    #[JsonProperty('items'), ArrayType([GetPrivateMessagesIdRepliesResponseDataItemsItem::class])]
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
     *   items: array<GetPrivateMessagesIdRepliesResponseDataItemsItem>,
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
