<?php

namespace ForuMs\Posts\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetPostsIdReactionsResponse extends JsonSerializableType
{
    /**
     * @var GetPostsIdReactionsResponseData $data
     */
    #[JsonProperty('data')]
    public GetPostsIdReactionsResponseData $data;

    /**
     * @param array{
     *   data: GetPostsIdReactionsResponseData,
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
