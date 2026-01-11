<?php

namespace ForuMs;

use ForuMs\Auth\AuthClient;
use ForuMs\Tags\TagsClient;
use ForuMs\Threads\ThreadsClient;
use ForuMs\Posts\PostsClient;
use ForuMs\PrivateMessages\PrivateMessagesClient;
use ForuMs\Users\UsersClient;
use ForuMs\Roles\RolesClient;
use ForuMs\Reports\ReportsClient;
use ForuMs\Notifications\NotificationsClient;
use ForuMs\Webhooks\WebhooksClient;
use ForuMs\Integrations\IntegrationsClient;
use ForuMs\SsOs\SsOsClient;
use GuzzleHttp\ClientInterface;
use ForuMs\Core\Client\RawClient;

class ForumClient
{
    /**
     * @var AuthClient $auth
     */
    public AuthClient $auth;

    /**
     * @var TagsClient $tags
     */
    public TagsClient $tags;

    /**
     * @var ThreadsClient $threads
     */
    public ThreadsClient $threads;

    /**
     * @var PostsClient $posts
     */
    public PostsClient $posts;

    /**
     * @var PrivateMessagesClient $privateMessages
     */
    public PrivateMessagesClient $privateMessages;

    /**
     * @var UsersClient $users
     */
    public UsersClient $users;

    /**
     * @var RolesClient $roles
     */
    public RolesClient $roles;

    /**
     * @var ReportsClient $reports
     */
    public ReportsClient $reports;

    /**
     * @var NotificationsClient $notifications
     */
    public NotificationsClient $notifications;

    /**
     * @var WebhooksClient $webhooks
     */
    public WebhooksClient $webhooks;

    /**
     * @var IntegrationsClient $integrations
     */
    public IntegrationsClient $integrations;

    /**
     * @var SsOsClient $ssOs
     */
    public SsOsClient $ssOs;

    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param ?string $apiKey The apiKey to use for authentication.
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        ?string $apiKey = null,
        ?array $options = null,
    ) {
        $defaultHeaders = [
            'X-Fern-Language' => 'PHP',
            'X-Fern-SDK-Name' => 'ForuMs',
            'X-Fern-SDK-Version' => '0.0.34',
            'User-Agent' => 'foru-ms/sdk/0.0.34',
        ];
        if ($apiKey != null) {
            $defaultHeaders['x-api-key'] = $apiKey;
        }

        $this->options = $options ?? [];

        $this->options['headers'] = array_merge(
            $defaultHeaders,
            $this->options['headers'] ?? [],
        );

        $this->client = new RawClient(
            options: $this->options,
        );

        $this->auth = new AuthClient($this->client, $this->options);
        $this->tags = new TagsClient($this->client, $this->options);
        $this->threads = new ThreadsClient($this->client, $this->options);
        $this->posts = new PostsClient($this->client, $this->options);
        $this->privateMessages = new PrivateMessagesClient($this->client, $this->options);
        $this->users = new UsersClient($this->client, $this->options);
        $this->roles = new RolesClient($this->client, $this->options);
        $this->reports = new ReportsClient($this->client, $this->options);
        $this->notifications = new NotificationsClient($this->client, $this->options);
        $this->webhooks = new WebhooksClient($this->client, $this->options);
        $this->integrations = new IntegrationsClient($this->client, $this->options);
        $this->ssOs = new SsOsClient($this->client, $this->options);
    }
}
