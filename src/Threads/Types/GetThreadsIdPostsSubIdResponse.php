<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetThreadsIdPostsSubIdResponse extends JsonSerializableType
{
    /**
     * @var GetThreadsIdPostsSubIdResponseData $data
     */
    #[JsonProperty('data')]
    public GetThreadsIdPostsSubIdResponseData $data;

    /**
     * @param array{
     *   data: GetThreadsIdPostsSubIdResponseData,
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
