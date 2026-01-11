<?php

namespace ForuMs\Roles\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PatchRolesIdResponse extends JsonSerializableType
{
    /**
     * @var ?PatchRolesIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?PatchRolesIdResponseData $data;

    /**
     * @param array{
     *   data?: ?PatchRolesIdResponseData,
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
