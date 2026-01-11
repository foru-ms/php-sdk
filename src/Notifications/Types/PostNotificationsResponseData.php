<?php

namespace ForuMs\Notifications\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PostNotificationsResponseData extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $userId Recipient user ID
     */
    #[JsonProperty('userId')]
    public string $userId;

    /**
     * @var string $notifierId User ID who triggered the notification
     */
    #[JsonProperty('notifierId')]
    public string $notifierId;

    /**
     * @var ?string $type Notification type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $description Notification text content
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $status Notification status (read, unread, dismissed, archived)
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $threadId Related thread ID
     */
    #[JsonProperty('threadId')]
    public ?string $threadId;

    /**
     * @var ?string $postId Related post ID
     */
    #[JsonProperty('postId')]
    public ?string $postId;

    /**
     * @var ?string $privateMessageId Related private message ID
     */
    #[JsonProperty('privateMessageId')]
    public ?string $privateMessageId;

    /**
     * @var ?array<string, mixed> $extendedData Additional notification data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @var string $createdAt Notification creation timestamp
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt Notification last update timestamp
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   userId: string,
     *   notifierId: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   type?: ?string,
     *   description?: ?string,
     *   status?: ?string,
     *   threadId?: ?string,
     *   postId?: ?string,
     *   privateMessageId?: ?string,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->userId = $values['userId'];
        $this->notifierId = $values['notifierId'];
        $this->type = $values['type'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->threadId = $values['threadId'] ?? null;
        $this->postId = $values['postId'] ?? null;
        $this->privateMessageId = $values['privateMessageId'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
        $this->createdAt = $values['createdAt'];
        $this->updatedAt = $values['updatedAt'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
