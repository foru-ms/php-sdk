<?php

namespace ForuMs\Webhooks;

use GuzzleHttp\ClientInterface;
use ForuMs\Core\Client\RawClient;
use ForuMs\Webhooks\Requests\GetWebhooksRequest;
use ForuMs\Webhooks\Types\GetWebhooksResponse;
use ForuMs\Exceptions\ForuMsException;
use ForuMs\Exceptions\ForuMsApiException;
use ForuMs\Core\Json\JsonApiRequest;
use ForuMs\Environments;
use ForuMs\Core\Client\HttpMethod;
use JsonException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Client\ClientExceptionInterface;
use ForuMs\Webhooks\Requests\PostWebhooksRequest;
use ForuMs\Webhooks\Types\PostWebhooksResponse;
use ForuMs\Webhooks\Types\GetWebhooksIdResponse;
use ForuMs\Webhooks\Types\DeleteWebhooksIdResponse;
use ForuMs\Webhooks\Requests\GetWebhooksIdDeliveriesRequest;
use ForuMs\Webhooks\Types\GetWebhooksIdDeliveriesResponse;
use ForuMs\Webhooks\Types\GetWebhooksIdDeliveriesSubIdResponse;
use ForuMs\Webhooks\Types\DeleteWebhooksIdDeliveriesSubIdResponse;

class WebhooksClient
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
     * @param GetWebhooksRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetWebhooksResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function listAllWebhooks(GetWebhooksRequest $request = new GetWebhooksRequest(), ?array $options = null): GetWebhooksResponse
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
                    path: "webhooks",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetWebhooksResponse::fromJson($json);
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
     * @param PostWebhooksRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostWebhooksResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function createAWebhook(PostWebhooksRequest $request, ?array $options = null): PostWebhooksResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "webhooks",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PostWebhooksResponse::fromJson($json);
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
     * @return GetWebhooksIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function getAWebhook(string $id, ?array $options = null): GetWebhooksIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "webhooks/{$id}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetWebhooksIdResponse::fromJson($json);
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
     * @return DeleteWebhooksIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function deleteAWebhook(string $id, ?array $options = null): DeleteWebhooksIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "webhooks/{$id}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return DeleteWebhooksIdResponse::fromJson($json);
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
     * @param string $id Webhook ID
     * @param GetWebhooksIdDeliveriesRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetWebhooksIdDeliveriesResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function listWebhookDeliveries(string $id, GetWebhooksIdDeliveriesRequest $request = new GetWebhooksIdDeliveriesRequest(), ?array $options = null): GetWebhooksIdDeliveriesResponse
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
                    path: "webhooks/{$id}/deliveries",
                    method: HttpMethod::GET,
                    query: $query,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetWebhooksIdDeliveriesResponse::fromJson($json);
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
     * @param string $id Webhook ID
     * @param string $subId Delivery ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetWebhooksIdDeliveriesSubIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function getADeliveryFromWebhook(string $id, string $subId, ?array $options = null): GetWebhooksIdDeliveriesSubIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "webhooks/{$id}/deliveries/{$subId}",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetWebhooksIdDeliveriesSubIdResponse::fromJson($json);
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
     * @param string $id Webhook ID
     * @param string $subId Delivery ID
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return DeleteWebhooksIdDeliveriesSubIdResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function deleteADeliveryFromWebhook(string $id, string $subId, ?array $options = null): DeleteWebhooksIdDeliveriesSubIdResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "webhooks/{$id}/deliveries/{$subId}",
                    method: HttpMethod::DELETE,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return DeleteWebhooksIdDeliveriesSubIdResponse::fromJson($json);
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
