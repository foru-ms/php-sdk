<?php

namespace ForuMs\Threads\Requests;

use ForuMs\Core\Json\JsonSerializableType;

class GetThreadsIdReactionsRequest extends JsonSerializableType
{
    /**
     * @var ?string $cursor Pagination cursor
     */
    public ?string $cursor;

    /**
     * @var ?int $limit Items per page
     */
    public ?int $limit;

    /**
     * @param array{
     *   cursor?: ?string,
     *   limit?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->cursor = $values['cursor'] ?? null;
        $this->limit = $values['limit'] ?? null;
    }
}
