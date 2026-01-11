<?php

namespace ForuMs\Integrations\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetIntegrationsResponse extends JsonSerializableType
{
    /**
     * @var array<GetIntegrationsResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([GetIntegrationsResponseDataItem::class])]
    public array $data;

    /**
     * @var GetIntegrationsResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public GetIntegrationsResponseMeta $meta;

    /**
     * @param array{
     *   data: array<GetIntegrationsResponseDataItem>,
     *   meta: GetIntegrationsResponseMeta,
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
