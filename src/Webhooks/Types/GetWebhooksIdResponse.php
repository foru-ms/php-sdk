<?php

namespace ForuMs\Webhooks\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetWebhooksIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetWebhooksIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?GetWebhooksIdResponseData $data;

    /**
     * @param array{
     *   data?: ?GetWebhooksIdResponseData,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->data = $values['data'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
