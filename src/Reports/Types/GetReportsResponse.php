<?php

namespace ForuMs\Reports\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetReportsResponse extends JsonSerializableType
{
    /**
     * @var array<GetReportsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([GetReportsResponseDataItem::class])]
    public array $data;

    /**
     * @var GetReportsResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public GetReportsResponseMeta $meta;

    /**
     * @param array{
     *   data: array<GetReportsResponseDataItem>,
     *   meta: GetReportsResponseMeta,
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
