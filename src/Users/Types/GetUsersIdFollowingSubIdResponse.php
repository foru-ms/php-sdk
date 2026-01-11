<?php

namespace ForuMs\Users\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetUsersIdFollowingSubIdResponse extends JsonSerializableType
{
    /**
     * @var GetUsersIdFollowingSubIdResponseData $data
     */
    #[JsonProperty('data')]
    public GetUsersIdFollowingSubIdResponseData $data;

    /**
     * @param array{
     *   data: GetUsersIdFollowingSubIdResponseData,
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
