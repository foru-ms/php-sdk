<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class ThreadCreate extends JsonSerializableType
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
     * @var ?ThreadCreatePoll $poll Poll data
     */
    #[JsonProperty('poll')]
    public ?ThreadCreatePoll $poll;

    /**
     * @param array{
     *   title: string,
     *   body: string,
     *   userId?: ?string,
     *   tags?: ?array<string>,
     *   poll?: ?ThreadCreatePoll,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
