<?php

namespace ForuMs\Posts\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetPostsIdPostsSubIdResponse extends JsonSerializableType
{
    /**
     * @var GetPostsIdPostsSubIdResponseData $data
     */
    #[JsonProperty('data')]
    public GetPostsIdPostsSubIdResponseData $data;

    /**
     * @param array{
     *   data: GetPostsIdPostsSubIdResponseData,
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
