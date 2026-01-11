<?php

namespace ForuMs\Tags\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetTagsResponse extends JsonSerializableType
{
    /**
     * @var array<GetTagsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([GetTagsResponseDataItem::class])]
    public array $data;

    /**
     * @var GetTagsResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public GetTagsResponseMeta $meta;

    /**
     * @param array{
     *   data: array<GetTagsResponseDataItem>,
     *   meta: GetTagsResponseMeta,
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
