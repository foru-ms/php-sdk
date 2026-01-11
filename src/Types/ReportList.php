<?php

namespace ForuMs\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;

class ReportList extends JsonSerializableType
{
    /**
     * @var ?float $limit Items per page (max 75)
     */
    #[JsonProperty('limit')]
    public ?float $limit;

    /**
     * @var ?string $cursor Cursor for pagination
     */
    #[JsonProperty('cursor')]
    public ?string $cursor;

    /**
     * @var ?string $status Filter by status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?string $reporterId Filter by reporter ID
     */
    #[JsonProperty('reporterId')]
    public ?string $reporterId;

    /**
     * @var ?string $reportedId Filter by reported user ID
     */
    #[JsonProperty('reportedId')]
    public ?string $reportedId;

    /**
     * @param array{
     *   limit?: ?float,
     *   cursor?: ?string,
     *   status?: ?string,
     *   reporterId?: ?string,
     *   reportedId?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->cursor = $values['cursor'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->reporterId = $values['reporterId'] ?? null;
        $this->reportedId = $values['reportedId'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
