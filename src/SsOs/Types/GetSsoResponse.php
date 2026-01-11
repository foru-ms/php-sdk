<?php

namespace ForuMs\SsOs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetSsoResponse extends JsonSerializableType
{
    /**
     * @var array<GetSsoResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([GetSsoResponseDataItem::class])]
    public array $data;

    /**
     * @var GetSsoResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public GetSsoResponseMeta $meta;

    /**
     * @param array{
     *   data: array<GetSsoResponseDataItem>,
     *   meta: GetSsoResponseMeta,
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
