<?php

namespace ForuMs\Posts\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetPostsIdResponseData extends JsonSerializableType
{
    /**
     * @var string $threadId Thread ID to post in
     */
    #[JsonProperty('threadId')]
    public string $threadId;

    /**
     * @var string $body Post content (Markdown supported)
     */
    #[JsonProperty('body')]
    public string $body;

    /**
     * @var ?string $userId Author user ID (required for API key auth, ignored for JWT auth)
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?string $parentId Parent post ID for threading
     */
    #[JsonProperty('parentId')]
    public ?string $parentId;

    /**
     * @var ?array<string, mixed> $extendedData
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?int $depth Nesting level for threaded replies
     */
    #[JsonProperty('depth')]
    public ?int $depth;

    /**
     * @var string $createdAt Post creation timestamp
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt Post last update timestamp
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   threadId: string,
     *   body: string,
     *   id: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   userId?: ?string,
     *   parentId?: ?string,
     *   extendedData?: ?array<string, mixed>,
     *   depth?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->threadId = $values['threadId'];
        $this->body = $values['body'];
        $this->userId = $values['userId'] ?? null;
        $this->parentId = $values['parentId'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
        $this->id = $values['id'];
        $this->depth = $values['depth'] ?? null;
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
