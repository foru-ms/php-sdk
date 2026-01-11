<?php

namespace ForuMs\Notifications\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Notifications\Types\PostNotificationsRequestStatus;
use ForuMs\Core\Types\ArrayType;

class PostNotificationsRequest extends JsonSerializableType
{
    /**
     * @var string $userId Target user ID to receive notification (maps to userId)
     */
    #[JsonProperty('userId')]
    public string $userId;

    /**
     * @var ?string $notifierId User ID who triggered the notification (optional, defaults to authenticated user)
     */
    #[JsonProperty('notifierId')]
    public ?string $notifierId;

    /**
     * @var string $type Notification type (e.g. mention, reply, follow)
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $description Notification text content
     */
    #[JsonProperty('description')]
    public ?string $description;

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
     * @var ?value-of<PostNotificationsRequestStatus> $status Initial notification status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?array<string, mixed> $extendedData Additional notification data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @param array{
     *   userId: string,
     *   type: string,
     *   notifierId?: ?string,
     *   description?: ?string,
     *   threadId?: ?string,
     *   postId?: ?string,
     *   privateMessageId?: ?string,
     *   status?: ?value-of<PostNotificationsRequestStatus>,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->userId = $values['userId'];
        $this->notifierId = $values['notifierId'] ?? null;
        $this->type = $values['type'];
        $this->description = $values['description'] ?? null;
        $this->threadId = $values['threadId'] ?? null;
        $this->postId = $values['postId'] ?? null;
        $this->privateMessageId = $values['privateMessageId'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
    }
}
