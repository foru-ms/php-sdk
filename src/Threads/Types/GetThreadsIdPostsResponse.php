<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetThreadsIdPostsResponse extends JsonSerializableType
{
    /**
     * @var GetThreadsIdPostsResponseData $data
     */
    #[JsonProperty('data')]
    public GetThreadsIdPostsResponseData $data;

    /**
     * @param array{
     *   data: GetThreadsIdPostsResponseData,
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
