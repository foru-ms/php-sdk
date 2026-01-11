<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class ReportCreate extends JsonSerializableType
{
    /**
     * @var string $type Report type (e.g. spam, abuse)
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $description Reason for reporting
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $userId Reporter user ID (required for API key auth, ignored for JWT auth)
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?string $reportedId ID of user being reported
     */
    #[JsonProperty('reportedId')]
    public ?string $reportedId;

    /**
     * @var ?string $threadId ID of thread being reported
     */
    #[JsonProperty('threadId')]
    public ?string $threadId;

    /**
     * @var ?string $postId ID of post being reported
     */
    #[JsonProperty('postId')]
    public ?string $postId;

    /**
     * @var ?string $privateMessageId ID of private message being reported
     */
    #[JsonProperty('privateMessageId')]
    public ?string $privateMessageId;

    /**
     * @param array{
     *   type: string,
     *   description?: ?string,
     *   userId?: ?string,
     *   reportedId?: ?string,
     *   threadId?: ?string,
     *   postId?: ?string,
     *   privateMessageId?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->description = $values['description'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->reportedId = $values['reportedId'] ?? null;
        $this->threadId = $values['threadId'] ?? null;
        $this->postId = $values['postId'] ?? null;
        $this->privateMessageId = $values['privateMessageId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
