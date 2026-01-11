<?php

namespace ForuMs\Posts\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Posts\Types\PostPostsIdReactionsRequestType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PostPostsIdReactionsRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostPostsIdReactionsRequestType> $type Type of reaction
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var ?string $userId User ID (required for API key auth, ignored for JWT auth)
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?array<string, mixed> $extendedData Additional custom data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @param array{
     *   type: value-of<PostPostsIdReactionsRequestType>,
     *   userId?: ?string,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->userId = $values['userId'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
    }
}
