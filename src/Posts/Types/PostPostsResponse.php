<?php

namespace ForuMs\Posts\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostPostsResponse extends JsonSerializableType
{
    /**
     * @var ?PostPostsResponseData $data
     */
    #[JsonProperty('data')]
    public ?PostPostsResponseData $data;

    /**
     * @param array{
     *   data?: ?PostPostsResponseData,
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
