<?php

namespace ForuMs\Webhooks\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetWebhooksResponse extends JsonSerializableType
{
    /**
     * @var array<GetWebhooksResponseDataItem> $data
     */
    #[JsonProperty('data'), ArrayType([GetWebhooksResponseDataItem::class])]
    public array $data;

    /**
     * @var GetWebhooksResponseMeta $meta
     */
    #[JsonProperty('meta')]
    public GetWebhooksResponseMeta $meta;

    /**
     * @param array{
     *   data: array<GetWebhooksResponseDataItem>,
     *   meta: GetWebhooksResponseMeta,
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
