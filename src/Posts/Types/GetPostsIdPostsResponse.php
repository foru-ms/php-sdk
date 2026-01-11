<?php

namespace ForuMs\Posts\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetPostsIdPostsResponse extends JsonSerializableType
{
    /**
     * @var GetPostsIdPostsResponseData $data
     */
    #[JsonProperty('data')]
    public GetPostsIdPostsResponseData $data;

    /**
     * @param array{
     *   data: GetPostsIdPostsResponseData,
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
