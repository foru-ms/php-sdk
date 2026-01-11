<?php

namespace ForuMs\SsOs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PatchSsoIdResponse extends JsonSerializableType
{
    /**
     * @var ?PatchSsoIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?PatchSsoIdResponseData $data;

    /**
     * @param array{
     *   data?: ?PatchSsoIdResponseData,
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
