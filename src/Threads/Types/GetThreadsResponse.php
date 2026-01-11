<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetThreadsResponse extends JsonSerializableType
{
    /**
     * @var array<GetThreadsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([GetThreadsResponseDataItem::class])]
    public array $data;

    /**
     * @var GetThreadsResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public GetThreadsResponseMeta $meta;

    /**
     * @param array{
     *   data: array<GetThreadsResponseDataItem>,
     *   meta: GetThreadsResponseMeta,
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
