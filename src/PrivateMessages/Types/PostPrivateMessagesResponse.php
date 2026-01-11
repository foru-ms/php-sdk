<?php

namespace ForuMs\PrivateMessages\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostPrivateMessagesResponse extends JsonSerializableType
{
    /**
     * @var ?PostPrivateMessagesResponseData $data
     */
    #[JsonProperty('data')]
    public ?PostPrivateMessagesResponseData $data;

    /**
     * @param array{
     *   data?: ?PostPrivateMessagesResponseData,
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
