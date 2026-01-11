<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostThreadsResponse extends JsonSerializableType
{
    /**
     * @var ?PostThreadsResponseData $data
     */
    #[JsonProperty('data')]
    public ?PostThreadsResponseData $data;

    /**
     * @param array{
     *   data?: ?PostThreadsResponseData,
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
