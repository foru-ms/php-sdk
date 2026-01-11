<?php

namespace ForuMs\Threads\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetThreadsIdResponseData extends JsonSerializableType
{
    /**
     * @var string $title Thread title
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var string $body Thread content (Markdown supported)
     */
    #[JsonProperty('body')]
    public string $body;

    /**
     * @var ?string $userId Author user ID (required for API key auth, ignored for JWT auth)
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?array<string> $tags List of tag slugs, names, or IDs to attach
     */
    #[JsonProperty('tags'), ArrayType(['string'])]
    public ?array $tags;

    /**
     * @var ?GetThreadsIdResponseDataPoll $poll Poll data
     */
    #[JsonProperty('poll')]
    public ?GetThreadsIdResponseDataPoll $poll;

    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var ?string $slug URL-friendly identifier
     */
    #[JsonProperty('slug')]
    public ?string $slug;

    /**
     * @var ?bool $locked Whether thread is locked
     */
    #[JsonProperty('locked')]
    public ?bool $locked;

    /**
     * @var ?bool $pinned Whether thread is pinned
     */
    #[JsonProperty('pinned')]
    public ?bool $pinned;

    /**
     * @var int $views View count
     */
    #[JsonProperty('views')]
    public int $views;

    /**
     * @var int $postsCount Number of posts/replies
     */
    #[JsonProperty('postsCount')]
    public int $postsCount;

    /**
     * @var ?string $lastPostAt Timestamp of the last post
     */
    #[JsonProperty('lastPostAt')]
    public ?string $lastPostAt;

    /**
     * @var ?array<string, mixed> $extendedData Custom metadata
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @var string $createdAt
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   title: string,
     *   body: string,
     *   id: string,
     *   views: int,
     *   postsCount: int,
     *   createdAt: string,
     *   updatedAt: string,
     *   userId?: ?string,
     *   tags?: ?array<string>,
     *   poll?: ?GetThreadsIdResponseDataPoll,
     *   slug?: ?string,
     *   locked?: ?bool,
     *   pinned?: ?bool,
     *   lastPostAt?: ?string,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->title = $values['title'];
        $this->body = $values['body'];
        $this->userId = $values['userId'] ?? null;
        $this->tags = $values['tags'] ?? null;
        $this->poll = $values['poll'] ?? null;
        $this->id = $values['id'];
        $this->slug = $values['slug'] ?? null;
        $this->locked = $values['locked'] ?? null;
        $this->pinned = $values['pinned'] ?? null;
        $this->views = $values['views'];
        $this->postsCount = $values['postsCount'];
        $this->lastPostAt = $values['lastPostAt'] ?? null;
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
