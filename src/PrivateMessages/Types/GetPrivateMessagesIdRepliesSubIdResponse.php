<?php

namespace ForuMs\PrivateMessages\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetPrivateMessagesIdRepliesSubIdResponse extends JsonSerializableType
{
    /**
     * @var GetPrivateMessagesIdRepliesSubIdResponseData $data
     */
    #[JsonProperty('data')]
    public GetPrivateMessagesIdRepliesSubIdResponseData $data;

    /**
     * @param array{
     *   data: GetPrivateMessagesIdRepliesSubIdResponseData,
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
