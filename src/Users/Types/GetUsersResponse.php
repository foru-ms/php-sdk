<?php

namespace ForuMs\Users\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetUsersResponse extends JsonSerializableType
{
    /**
     * @var array<GetUsersResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([GetUsersResponseDataItem::class])]
    public array $data;

    /**
     * @var GetUsersResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public GetUsersResponseMeta $meta;

    /**
     * @param array{
     *   data: array<GetUsersResponseDataItem>,
     *   meta: GetUsersResponseMeta,
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
