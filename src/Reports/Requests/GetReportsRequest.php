<?php

namespace ForuMs\Reports\Requests;

use ForuMs\Core\Json\JsonSerializableType;

class GetReportsRequest extends JsonSerializableType
{
    /**
     * @var ?int $page
     */
    public ?int $page;

    /**
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @var ?string $search
     */
    public ?string $search;

    /**
     * @param array{
     *   page?: ?int,
     *   limit?: ?int,
     *   search?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->page = $values['page'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->search = $values['search'] ?? null;
    }
}
