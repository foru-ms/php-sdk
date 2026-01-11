<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostThreadsIdReactionsResponse extends JsonSerializableType
{
    /**
     * @var PostThreadsIdReactionsResponseData $data
     */
    #[JsonProperty('data')]
    public PostThreadsIdReactionsResponseData $data;

    /**
     * @param array{
     *   data: PostThreadsIdReactionsResponseData,
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
