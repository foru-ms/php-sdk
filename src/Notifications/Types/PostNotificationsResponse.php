<?php

namespace ForuMs\Notifications\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostNotificationsResponse extends JsonSerializableType
{
    /**
     * @var ?PostNotificationsResponseData $data
     */
    #[JsonProperty('data')]
    public ?PostNotificationsResponseData $data;

    /**
     * @param array{
     *   data?: ?PostNotificationsResponseData,
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
