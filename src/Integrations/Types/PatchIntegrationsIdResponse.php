<?php

namespace ForuMs\Integrations\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PatchIntegrationsIdResponse extends JsonSerializableType
{
    /**
     * @var ?PatchIntegrationsIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?PatchIntegrationsIdResponseData $data;

    /**
     * @param array{
     *   data?: ?PatchIntegrationsIdResponseData,
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
