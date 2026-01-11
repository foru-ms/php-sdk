<?php

namespace ForuMs\PrivateMessages\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetPrivateMessagesIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetPrivateMessagesIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?GetPrivateMessagesIdResponseData $data;

    /**
     * @param array{
     *   data?: ?GetPrivateMessagesIdResponseData,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->data = $values['data'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
