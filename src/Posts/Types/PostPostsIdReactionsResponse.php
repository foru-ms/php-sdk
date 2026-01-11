<?php

namespace ForuMs\Posts\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostPostsIdReactionsResponse extends JsonSerializableType
{
    /**
     * @var PostPostsIdReactionsResponseData $data
     */
    #[JsonProperty('data')]
    public PostPostsIdReactionsResponseData $data;

    /**
     * @param array{
     *   data: PostPostsIdReactionsResponseData,
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
