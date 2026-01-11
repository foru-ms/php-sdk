<?php

namespace ForuMs\SsOs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetSsoIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetSsoIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?GetSsoIdResponseData $data;

    /**
     * @param array{
     *   data?: ?GetSsoIdResponseData,
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
