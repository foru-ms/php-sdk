<?php

namespace ForuMs\Threads\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Threads\Types\PostThreadsIdReactionsRequestType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PostThreadsIdReactionsRequest extends JsonSerializableType
{
    /**
     * @var value-of<PostThreadsIdReactionsRequestType> $type Type of reaction
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
     *   type: value-of<PostThreadsIdReactionsRequestType>,
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
