<?php

namespace ForuMs\Users\Types;

use ForuMs\Core\Json\JsonSerializableType;
use ForuMs\Core\Json\JsonProperty;
use ForuMs\Core\Types\ArrayType;

class GetUsersResponseDataItem extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $username
     */
    #[JsonProperty('username')]
    public string $username;

    /**
     * @var ?string $displayName Display name
     */
    #[JsonProperty('displayName')]
    public ?string $displayName;

    /**
     * @var ?string $bio User bio
     */
    #[JsonProperty('bio')]
    public ?string $bio;

    /**
     * @var ?string $signature Forum signature
     */
    #[JsonProperty('signature')]
    public ?string $signature;

    /**
     * @var ?string $url User website URL
     */
    #[JsonProperty('url')]
    public ?string $url;

    /**
     * @var ?int $postsCount Total posts by user
     */
    #[JsonProperty('postsCount')]
    public ?int $postsCount;

    /**
     * @var ?int $threadsCount Total threads by user
     */
    #[JsonProperty('threadsCount')]
    public ?int $threadsCount;

    /**
     * @var ?bool $isOnline Online status
     */
    #[JsonProperty('isOnline')]
    public ?bool $isOnline;

    /**
     * @var ?string $lastSeenAt Last activity timestamp
     */
    #[JsonProperty('lastSeenAt')]
    public ?string $lastSeenAt;

    /**
     * @var ?array<GetUsersResponseDataItemRolesItem> $roles User roles
     */
    #[JsonProperty('roles'), ArrayType([GetUsersResponseDataItemRolesItem::class])]
    public ?array $roles;

    /**
     * @var ?array<string, mixed> $extendedData Custom user data
     */
    #[JsonProperty('extendedData'), ArrayType(['string' => 'mixed'])]
    public ?array $extendedData;

    /**
     * @var string $createdAt Account creation timestamp
     */
    #[JsonProperty('createdAt')]
    public string $createdAt;

    /**
     * @var string $updatedAt Profile last update timestamp
     */
    #[JsonProperty('updatedAt')]
    public string $updatedAt;

    /**
     * @param array{
     *   id: string,
     *   username: string,
     *   createdAt: string,
     *   updatedAt: string,
     *   displayName?: ?string,
     *   bio?: ?string,
     *   signature?: ?string,
     *   url?: ?string,
     *   postsCount?: ?int,
     *   threadsCount?: ?int,
     *   isOnline?: ?bool,
     *   lastSeenAt?: ?string,
     *   roles?: ?array<GetUsersResponseDataItemRolesItem>,
     *   extendedData?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->username = $values['username'];
        $this->displayName = $values['displayName'] ?? null;
        $this->bio = $values['bio'] ?? null;
        $this->signature = $values['signature'] ?? null;
        $this->url = $values['url'] ?? null;
        $this->postsCount = $values['postsCount'] ?? null;
        $this->threadsCount = $values['threadsCount'] ?? null;
        $this->isOnline = $values['isOnline'] ?? null;
        $this->lastSeenAt = $values['lastSeenAt'] ?? null;
        $this->roles = $values['roles'] ?? null;
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
