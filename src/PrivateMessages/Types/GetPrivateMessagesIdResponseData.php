<?php

namespace ForuMs\PrivateMessages\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetPrivateMessagesIdResponseData extends JsonSerializableType
{
    /**
     * @var string $recipientId Recipient User ID
     */
    #[JsonProperty('recipientId')]
    public string $recipientId;

    /**
     * @var ?string $senderId Sender user ID (required for API key auth, ignored for JWT auth)
     */
    #[JsonProperty('senderId')]
    public ?string $senderId;

    /**
     * @var ?string $title Message title (optional for replies)
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var string $body Message content
     */
    #[JsonProperty('body')]
    public string $body;

    /**
     * @var ?string $parentId Parent Message ID (for replies)
     */
    #[JsonProperty('parentId')]
    public ?string $parentId;

    /**
     * @var ?array<string, mixed> $extendedData Extended data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $status Message status (sent, delivered, read, archived)
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var string $createdAt Message sent timestamp
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt Message last update timestamp
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   recipientId: string,
     *   body: string,
     *   id: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   senderId?: ?string,
     *   title?: ?string,
     *   parentId?: ?string,
     *   extendedData?: ?array<string, mixed>,
     *   status?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->recipientId = $values['recipientId'];
        $this->senderId = $values['senderId'] ?? null;
        $this->title = $values['title'] ?? null;
        $this->body = $values['body'];
        $this->parentId = $values['parentId'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
        $this->id = $values['id'];
        $this->status = $values['status'] ?? null;
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
