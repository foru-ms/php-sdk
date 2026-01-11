<?php

namespace ForuMs\Posts\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PatchPostsIdRequest extends JsonSerializableType
{
    /**
     * @var ?string $body Updated post content
     */
    #[JsonProperty('body')]
    public ?string $body;

    /**
     * @var ?string $threadId Move post to another thread
     */
    #[JsonProperty('threadId')]
    public ?string $threadId;

    /**
     * @var ?string $parentId Change parent post
     */
    #[JsonProperty('parentId')]
    public ?string $parentId;

    /**
     * @var ?array<string, mixed> $extendedData Update extended data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @param array{
     *   body?: ?string,
     *   threadId?: ?string,
     *   parentId?: ?string,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->body = $values['body'] ?? null;
        $this->threadId = $values['threadId'] ?? null;
        $this->parentId = $values['parentId'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
    }
}
