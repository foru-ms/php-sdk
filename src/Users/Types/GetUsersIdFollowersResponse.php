<?php

namespace ForuMs\Users\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetUsersIdFollowersResponse extends JsonSerializableType
{
    /**
     * @var GetUsersIdFollowersResponseData $data
     */
    #[JsonProperty('data')]
    public GetUsersIdFollowersResponseData $data;

    /**
     * @param array{
     *   data: GetUsersIdFollowersResponseData,
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
