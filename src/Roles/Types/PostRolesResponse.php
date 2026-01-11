<?php

namespace ForuMs\Roles\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostRolesResponse extends JsonSerializableType
{
    /**
     * @var ?PostRolesResponseData $data
     */
    #[JsonProperty('data')]
    public ?PostRolesResponseData $data;

    /**
     * @param array{
     *   data?: ?PostRolesResponseData,
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
