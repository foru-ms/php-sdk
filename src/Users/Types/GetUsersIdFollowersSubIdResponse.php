<?php

namespace ForuMs\Users\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetUsersIdFollowersSubIdResponse extends JsonSerializableType
{
    /**
     * @var GetUsersIdFollowersSubIdResponseData $data
     */
    #[JsonProperty('data')]
    public GetUsersIdFollowersSubIdResponseData $data;

    /**
     * @param array{
     *   data: GetUsersIdFollowersSubIdResponseData,
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
