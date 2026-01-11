<?php

namespace ForuMs\PrivateMessages\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostPrivateMessagesIdRepliesResponse extends JsonSerializableType
{
    /**
     * @var PostPrivateMessagesIdRepliesResponseData $data
     */
    #[JsonProperty('data')]
    public PostPrivateMessagesIdRepliesResponseData $data;

    /**
     * @param array{
     *   data: PostPrivateMessagesIdRepliesResponseData,
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
