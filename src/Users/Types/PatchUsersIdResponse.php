<?php

namespace ForuMs\Users\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PatchUsersIdResponse extends JsonSerializableType
{
    /**
     * @var ?PatchUsersIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?PatchUsersIdResponseData $data;

    /**
     * @param array{
     *   data?: ?PatchUsersIdResponseData,
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
