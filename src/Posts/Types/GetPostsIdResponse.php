<?php

namespace ForuMs\Posts\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetPostsIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetPostsIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?GetPostsIdResponseData $data;

    /**
     * @param array{
     *   data?: ?GetPostsIdResponseData,
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
