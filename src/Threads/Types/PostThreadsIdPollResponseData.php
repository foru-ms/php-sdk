<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;

class PostThreadsIdPollResponseData extends JsonSerializableType
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
