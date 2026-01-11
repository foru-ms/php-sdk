<?php

namespace ForuMs\Notifications\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetNotificationsResponse extends JsonSerializableType
{
    /**
     * @var array<GetNotificationsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([GetNotificationsResponseDataItem::class])]
    public array $data;

    /**
     * @var GetNotificationsResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public GetNotificationsResponseMeta $meta;

    /**
     * @param array{
     *   data: array<GetNotificationsResponseDataItem>,
     *   meta: GetNotificationsResponseMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->data = $values['data'];
        $this->meta = $values['meta'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
