<?php

namespace ForuMs\Posts\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetPostsResponse extends JsonSerializableType
{
    /**
     * @var array<GetPostsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([GetPostsResponseDataItem::class])]
    public array $data;

    /**
     * @var GetPostsResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public GetPostsResponseMeta $meta;

    /**
     * @param array{
     *   data: array<GetPostsResponseDataItem>,
     *   meta: GetPostsResponseMeta,
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
