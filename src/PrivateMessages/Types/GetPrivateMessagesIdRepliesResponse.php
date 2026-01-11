<?php

namespace ForuMs\PrivateMessages\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetPrivateMessagesIdRepliesResponse extends JsonSerializableType
{
    /**
     * @var GetPrivateMessagesIdRepliesResponseData $data
     */
    #[JsonProperty('data')]
    public GetPrivateMessagesIdRepliesResponseData $data;

    /**
     * @param array{
     *   data: GetPrivateMessagesIdRepliesResponseData,
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
