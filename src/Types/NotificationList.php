<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class NotificationList extends JsonSerializableType
{
    /**
     * @var ?float $limit Items per page (max 75)
     */
    #[JsonProperty('limit')]
    public ?float $limit;

    /**
     * @var ?string $cursor Cursor for pagination
     */
    #[JsonProperty('cursor')]
    public ?string $cursor;

    /**
     * @var ?value-of<NotificationListStatus> $status Filter by notification status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $userId Filter by recipient user ID (admin only)
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @param array{
     *   limit?: ?float,
     *   cursor?: ?string,
     *   status?: ?value-of<NotificationListStatus>,
     *   userId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->userId = $values['userId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
