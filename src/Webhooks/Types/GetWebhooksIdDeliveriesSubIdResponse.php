<?php

namespace ForuMs\Webhooks\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetWebhooksIdDeliveriesSubIdResponse extends JsonSerializableType
{
    /**
     * @var GetWebhooksIdDeliveriesSubIdResponseData $data
     */
    #[JsonProperty('data')]
    public GetWebhooksIdDeliveriesSubIdResponseData $data;

    /**
     * @param array{
     *   data: GetWebhooksIdDeliveriesSubIdResponseData,
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
