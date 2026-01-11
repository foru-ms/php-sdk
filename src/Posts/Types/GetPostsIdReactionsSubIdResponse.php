<?php

namespace ForuMs\Posts\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetPostsIdReactionsSubIdResponse extends JsonSerializableType
{
    /**
     * @var GetPostsIdReactionsSubIdResponseData $data
     */
    #[JsonProperty('data')]
    public GetPostsIdReactionsSubIdResponseData $data;

    /**
     * @param array{
     *   data: GetPostsIdReactionsSubIdResponseData,
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
