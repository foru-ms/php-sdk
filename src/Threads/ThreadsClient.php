<?php

namespace ForuMs\Threads;

use GuzzleHttp\ClientInterface;
use ForuMs\Core\Client\RawClient;
use ForuMs\Threads\Requests\GetThreadsRequest;
use ForuMs\Threads\Types\GetThreadsResponse;
use ForuMs\Exceptions\ForuMsException;
use ForuMs\Exceptions\ForuMsApiException;
use ForuMs\Core\Json\JsonApiRequest;
use ForuMs\Environments;
use ForuMs\Core\Client\HttpMethod;
use JsonException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Client\ClientExceptionInterface;
use ForuMs\Threads\Requests\PostThreadsRequest;
use ForuMs\Threads\Types\PostThreadsResponse;
use ForuMs\Threads\Types\GetThreadsIdResponse;
use ForuMs\Threads\Types\DeleteThreadsIdResponse;
use ForuMs\Threads\Requests\PatchThreadsIdRequest;
use ForuMs\Threads\Types\PatchThreadsIdResponse;
use ForuMs\Threads\Requests\GetThreadsIdPostsRequest;
use ForuMs\Threads\Types\GetThreadsIdPostsResponse;
use ForuMs\Threads\Types\GetThreadsIdPostsSubIdResponse;
use ForuMs\Threads\Types\DeleteThreadsIdPostsSubIdResponse;
use ForuMs\Threads\Requests\GetThreadsIdReactionsRequest;
use ForuMs\Threads\Types\GetThreadsIdReactionsResponse;
use ForuMs\Threads\Requests\PostThreadsIdReactionsRequest;
use ForuMs\Threads\Types\PostThreadsIdReactionsResponse;
use ForuMs\Threads\Types\DeleteThreadsIdReactionsResponse;
use ForuMs\Threads\Types\GetThreadsIdReactionsSubIdResponse;
use ForuMs\Threads\Types\DeleteThreadsIdReactionsSubIdResponse;
use ForuMs\Threads\Requests\GetThreadsIdSubscribersRequest;
use ForuMs\Threads\Types\GetThreadsIdSubscribersResponse;
use ForuMs\Threads\Types\GetThreadsIdSubscribersSubIdResponse;
use ForuMs\Threads\Types\DeleteThreadsIdSubscribersSubIdResponse;
use ForuMs\Threads\Types\GetThreadsIdPollResponse;
use ForuMs\Threads\Requests\PostThreadsIdPollRequest;
use ForuMs\Threads\Types\PostThreadsIdPollResponse;
use ForuMs\Threads\Requests\PatchThreadsIdPollRequest;
use ForuMs\Threads\Types\PatchThreadsIdPollResponse;

class ThreadsClient
{
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
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

    /**
     * @param GetThreadsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetThreadsResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function listAllThreads(GetThreadsRequest $request = new GetThreadsRequest(), ?array $options = null): GetThreadsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->page != null) {
            $query['page'] = $request->page;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        if ($request->search != null) {
            $query['search'] = $request->search;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetThreadsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param PostThreadsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostThreadsResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function createAThread(PostThreadsRequest $request, ?array $options = null): PostThreadsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PostThreadsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetThreadsIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function getAThread(string $id, ?array $options = null): GetThreadsIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetThreadsIdResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return DeleteThreadsIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function deleteAThread(string $id, ?array $options = null): DeleteThreadsIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return DeleteThreadsIdResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id
     * @param PatchThreadsIdRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PatchThreadsIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function updateAThread(string $id, PatchThreadsIdRequest $request = new PatchThreadsIdRequest(), ?array $options = null): PatchThreadsIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}",
                    method: HttpMethod::PATCH,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PatchThreadsIdResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param GetThreadsIdPostsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetThreadsIdPostsResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function listThreadPosts(string $id, GetThreadsIdPostsRequest $request = new GetThreadsIdPostsRequest(), ?array $options = null): GetThreadsIdPostsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->cursor != null) {
            $query['cursor'] = $request->cursor;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/posts",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetThreadsIdPostsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param string $subId Post ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetThreadsIdPostsSubIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function getAPostFromThread(string $id, string $subId, ?array $options = null): GetThreadsIdPostsSubIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/posts/{$subId}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetThreadsIdPostsSubIdResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param string $subId Post ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return DeleteThreadsIdPostsSubIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function deleteAPostFromThread(string $id, string $subId, ?array $options = null): DeleteThreadsIdPostsSubIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/posts/{$subId}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return DeleteThreadsIdPostsSubIdResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param GetThreadsIdReactionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetThreadsIdReactionsResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function listThreadReactions(string $id, GetThreadsIdReactionsRequest $request = new GetThreadsIdReactionsRequest(), ?array $options = null): GetThreadsIdReactionsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->cursor != null) {
            $query['cursor'] = $request->cursor;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/reactions",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetThreadsIdReactionsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param PostThreadsIdReactionsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostThreadsIdReactionsResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function createAReactionInThread(string $id, PostThreadsIdReactionsRequest $request, ?array $options = null): PostThreadsIdReactionsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/reactions",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PostThreadsIdReactionsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Removes the authenticated user's reaction. No subId needed.
     *
     * @param string $id Thread ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return DeleteThreadsIdReactionsResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function removeYourReactionFromThread(string $id, ?array $options = null): DeleteThreadsIdReactionsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/reactions",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return DeleteThreadsIdReactionsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param string $subId Reaction ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetThreadsIdReactionsSubIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function getAReactionFromThread(string $id, string $subId, ?array $options = null): GetThreadsIdReactionsSubIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/reactions/{$subId}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetThreadsIdReactionsSubIdResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param string $subId Reaction ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return DeleteThreadsIdReactionsSubIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function deleteAReactionFromThread(string $id, string $subId, ?array $options = null): DeleteThreadsIdReactionsSubIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/reactions/{$subId}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return DeleteThreadsIdReactionsSubIdResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param GetThreadsIdSubscribersRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetThreadsIdSubscribersResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function listThreadSubscribers(string $id, GetThreadsIdSubscribersRequest $request = new GetThreadsIdSubscribersRequest(), ?array $options = null): GetThreadsIdSubscribersResponse
    {
        $options = array_merge($this->options, $options ?? []);
        $query = [];
        if ($request->cursor != null) {
            $query['cursor'] = $request->cursor;
        }
        if ($request->limit != null) {
            $query['limit'] = $request->limit;
        }
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/subscribers",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetThreadsIdSubscribersResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param string $subId Subscriber ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetThreadsIdSubscribersSubIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function getASubscriberFromThread(string $id, string $subId, ?array $options = null): GetThreadsIdSubscribersSubIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/subscribers/{$subId}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetThreadsIdSubscribersSubIdResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param string $subId Subscriber ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return DeleteThreadsIdSubscribersSubIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function deleteASubscriberFromThread(string $id, string $subId, ?array $options = null): DeleteThreadsIdSubscribersSubIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/subscribers/{$subId}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return DeleteThreadsIdSubscribersSubIdResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetThreadsIdPollResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function getThreadPoll(string $id, ?array $options = null): GetThreadsIdPollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/poll",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetThreadsIdPollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param PostThreadsIdPollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostThreadsIdPollResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function createThreadPoll(string $id, PostThreadsIdPollRequest $request, ?array $options = null): PostThreadsIdPollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/poll",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PostThreadsIdPollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * @param string $id Thread ID
     * @param PatchThreadsIdPollRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PatchThreadsIdPollResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function updateThreadPoll(string $id, PatchThreadsIdPollRequest $request = new PatchThreadsIdPollRequest(), ?array $options = null): PatchThreadsIdPollResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "threads/{$id}/poll",
                    method: HttpMethod::PATCH,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PatchThreadsIdPollResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new ForuMsException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            if ($response === null) {
                throw new ForuMsException(message: $e->getMessage(), previous: $e);
            }
            throw new ForuMsApiException(
                message: "API request failed",
                statusCode: $response->getStatusCode(),
                body: $response->getBody()->getContents(),
            );
        } catch (ClientExceptionInterface $e) {
            throw new ForuMsException(message: $e->getMessage(), previous: $e);
        }
        throw new ForuMsApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
