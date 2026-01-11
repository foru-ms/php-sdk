<?php

namespace ForuMs\Auth;

use GuzzleHttp\ClientInterface;
use ForuMs\Core\Client\RawClient;
use ForuMs\Auth\Requests\PostAuthRegisterRequest;
use ForuMs\Auth\Types\PostAuthRegisterResponse;
use ForuMs\Exceptions\ForuMsException;
use ForuMs\Exceptions\ForuMsApiException;
use ForuMs\Core\Json\JsonApiRequest;
use ForuMs\Environments;
use ForuMs\Core\Client\HttpMethod;
use JsonException;
use GuzzleHttp\Exception\RequestException;
use Psr\Http\Client\ClientExceptionInterface;
use ForuMs\Auth\Requests\PostAuthLoginRequest;
use ForuMs\Auth\Types\PostAuthLoginResponse;
use ForuMs\Auth\Types\GetAuthMeResponse;
use ForuMs\Auth\Requests\PostAuthForgotPasswordRequest;
use ForuMs\Auth\Types\PostAuthForgotPasswordResponse;
use ForuMs\Auth\Requests\PostAuthResetPasswordRequest;
use ForuMs\Auth\Types\PostAuthResetPasswordResponse;

class AuthClient
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
     * @param PostAuthRegisterRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostAuthRegisterResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function register(PostAuthRegisterRequest $request, ?array $options = null): PostAuthRegisterResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "auth/register",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PostAuthRegisterResponse::fromJson($json);
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
     * @param PostAuthLoginRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostAuthLoginResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function login(PostAuthLoginRequest $request, ?array $options = null): PostAuthLoginResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "auth/login",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PostAuthLoginResponse::fromJson($json);
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
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return GetAuthMeResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function getCurrentUser(?array $options = null): GetAuthMeResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "auth/me",
                    method: HttpMethod::GET,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return GetAuthMeResponse::fromJson($json);
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
     * @param PostAuthForgotPasswordRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostAuthForgotPasswordResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function requestPasswordReset(PostAuthForgotPasswordRequest $request, ?array $options = null): PostAuthForgotPasswordResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "auth/forgot-password",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PostAuthForgotPasswordResponse::fromJson($json);
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
     * @param PostAuthResetPasswordRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return PostAuthResetPasswordResponse
     * @throws ForuMsException
     * @throws ForuMsApiException
     */
    public function resetPassword(PostAuthResetPasswordRequest $request, ?array $options = null): PostAuthResetPasswordResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "auth/reset-password",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                return PostAuthResetPasswordResponse::fromJson($json);
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
