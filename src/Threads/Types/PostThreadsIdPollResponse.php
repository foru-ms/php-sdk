<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostThreadsIdPollResponse extends JsonSerializableType
{
    /**
     * @var PostThreadsIdPollResponseData $data
     */
    #[JsonProperty('data')]
    public PostThreadsIdPollResponseData $data;

    /**
     * @param array{
     *   data: PostThreadsIdPollResponseData,
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
