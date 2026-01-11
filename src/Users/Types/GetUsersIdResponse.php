<?php

namespace ForuMs\Users\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetUsersIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetUsersIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?GetUsersIdResponseData $data;

    /**
     * @param array{
     *   data?: ?GetUsersIdResponseData,
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
