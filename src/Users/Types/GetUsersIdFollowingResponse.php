<?php

namespace ForuMs\Users\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetUsersIdFollowingResponse extends JsonSerializableType
{
    /**
     * @var GetUsersIdFollowingResponseData $data
     */
    #[JsonProperty('data')]
    public GetUsersIdFollowingResponseData $data;

    /**
     * @param array{
     *   data: GetUsersIdFollowingResponseData,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->data = $values['data'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
