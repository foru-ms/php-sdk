<?php

namespace ForuMs\Integrations\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostIntegrationsResponse extends JsonSerializableType
{
    /**
     * @var ?PostIntegrationsResponseData $data
     */
    #[JsonProperty('data')]
    public ?PostIntegrationsResponseData $data;

    /**
     * @param array{
     *   data?: ?PostIntegrationsResponseData,
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
