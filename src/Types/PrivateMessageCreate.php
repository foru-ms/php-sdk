<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PrivateMessageCreate extends JsonSerializableType
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
     * @param array{
     *   recipientId: string,
     *   body: string,
     *   senderId?: ?string,
     *   title?: ?string,
     *   parentId?: ?string,
     *   extendedData?: ?array<string, mixed>,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
