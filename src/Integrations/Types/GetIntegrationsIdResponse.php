<?php

namespace ForuMs\Integrations\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetIntegrationsIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetIntegrationsIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?GetIntegrationsIdResponseData $data;

    /**
     * @param array{
     *   data?: ?GetIntegrationsIdResponseData,
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
