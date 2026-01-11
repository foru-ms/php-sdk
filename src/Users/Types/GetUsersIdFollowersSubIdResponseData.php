<?php

namespace ForuMs\Users\Types;

use ForuMs\Core\Json\JsonSerializableType;

class GetUsersIdFollowersSubIdResponseData extends JsonSerializableType
{
    /**
     * @param array{
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        unset($values);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
