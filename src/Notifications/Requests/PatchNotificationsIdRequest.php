<?php

namespace ForuMs\Notifications\Requests;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Notifications\Types\PatchNotificationsIdRequestStatus;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class PatchNotificationsIdRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<PatchNotificationsIdRequestStatus> $status Notification status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var ?array<string, mixed> $extendedData Update extended data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @param array{
     *   status?: ?value-of<PatchNotificationsIdRequestStatus>,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->status = $values['status'] ?? null;
        $this->extendedData = $values['extendedData'] ?? null;
    }
}
