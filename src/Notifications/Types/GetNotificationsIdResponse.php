<?php

namespace ForuMs\Notifications\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class GetNotificationsIdResponse extends JsonSerializableType
{
    /**
     * @var ?GetNotificationsIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?GetNotificationsIdResponseData $data;

    /**
     * @param array{
     *   data?: ?GetNotificationsIdResponseData,
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
