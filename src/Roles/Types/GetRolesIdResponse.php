<?php

namespace ForuMs\Roles\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetRolesIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetRolesIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?GetRolesIdResponseData $data;

    /**
     * @param array{
     *   data?: ?GetRolesIdResponseData,
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
