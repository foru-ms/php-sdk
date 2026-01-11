<?php

namespace ForuMs\Notifications\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PatchNotificationsIdResponse extends JsonSerializableType
{
    /**
     * @var ?PatchNotificationsIdResponseData $data
     */
    #[JsonProperty('data')]
    public ?PatchNotificationsIdResponseData $data;

    /**
     * @param array{
     *   data?: ?PatchNotificationsIdResponseData,
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
