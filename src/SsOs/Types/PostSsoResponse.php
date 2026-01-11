<?php

namespace ForuMs\SsOs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostSsoResponse extends JsonSerializableType
{
    /**
     * @var ?PostSsoResponseData $data
     */
    #[JsonProperty('data')]
    public ?PostSsoResponseData $data;

    /**
     * @param array{
     *   data?: ?PostSsoResponseData,
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
