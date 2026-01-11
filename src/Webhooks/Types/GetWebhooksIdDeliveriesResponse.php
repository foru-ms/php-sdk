<?php

namespace ForuMs\Webhooks\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetWebhooksIdDeliveriesResponse extends JsonSerializableType
{
    /**
     * @var GetWebhooksIdDeliveriesResponseData $data
     */
    #[JsonProperty('data')]
    public GetWebhooksIdDeliveriesResponseData $data;

    /**
     * @param array{
     *   data: GetWebhooksIdDeliveriesResponseData,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->data = $values['data'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
