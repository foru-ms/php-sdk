<?php

namespace ForuMs\Reports\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class PostReportsResponseData extends JsonSerializableType
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
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $status Report status (pending, reviewed, resolved, dismissed)
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var string $createdAt Report creation timestamp
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt Report last update timestamp
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   type: string,
     *   id: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   description?: ?string,
     *   userId?: ?string,
     *   reportedId?: ?string,
     *   threadId?: ?string,
     *   postId?: ?string,
     *   privateMessageId?: ?string,
     *   status?: ?string,
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
