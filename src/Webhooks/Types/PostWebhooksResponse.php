<?php

namespace ForuMs\Webhooks\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostWebhooksResponse extends JsonSerializableType
{
    /**
     * @var ?PostWebhooksResponseData $data
     */
    #[JsonProperty('data')]
    public ?PostWebhooksResponseData $data;

    /**
     * @param array{
     *   data?: ?PostWebhooksResponseData,
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
