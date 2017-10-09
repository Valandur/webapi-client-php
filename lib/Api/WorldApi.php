<?php
/**
 * WorldApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * WebAPI
 *
 * Access Sponge powered Minecraft servers through a WebAPI  #/ Introduction This is the documentation of the various API routes offered by the WebAPI plugin.  This documentation assumes that you are familiar with the basic concepts of Web API's, such as `GET`, `PUT`, `POST` and `DELETE` methods, request `HEADERS` and `RESPONSE CODES` and `JSON` data.  By default this documentation can be found at http:/localhost:8080 (while your minecraft server is running) and the various routes start with http:/localhost:8080/api/...  As a quick test try reaching the route http:/localhost:8080/api/info (remember that you can only access \"localhost\" routes on the server on which you are running minecraft). This route should show you basic information about your server, like the motd and player count.  #/ Additional data Certain endpoints (such as `/player`, `/entity` and `/tile-entity` have additional properties which are not documented here, because the data depends on the concrete object type (eg. `Sheep` have a wool color, others do not) and on the other plugins/mods that are running on your server which might add additional data.  You can also find more information in the github docs (https:/github.com/Valandur/Web-API/tree/master/docs/DATA.md)
 *
 * OpenAPI spec version: <version>
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * WorldApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WorldApi
{
    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return WorldApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation changeWorld
     *
     * Edit world
     *
     * @param string $uuid The uuid of the world. (required)
     * @param \Swagger\Client\Model\UpdateWorldRequest $update_world_request The new properties of the world (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\WorldResponse
     */
    public function changeWorld($uuid, $update_world_request)
    {
        list($response) = $this->changeWorldWithHttpInfo($uuid, $update_world_request);
        return $response;
    }

    /**
     * Operation changeWorldWithHttpInfo
     *
     * Edit world
     *
     * @param string $uuid The uuid of the world. (required)
     * @param \Swagger\Client\Model\UpdateWorldRequest $update_world_request The new properties of the world (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\WorldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function changeWorldWithHttpInfo($uuid, $update_world_request)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling changeWorld');
        }
        // verify the required parameter 'update_world_request' is set
        if ($update_world_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $update_world_request when calling changeWorld');
        }
        // parse inputs
        $resourcePath = "/world/{uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                "{" . "uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($update_world_request)) {
            $_tempBody = $update_world_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-webapi-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-webapi-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\WorldResponse',
                '/world/{uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\WorldResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\WorldResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createWorld
     *
     * Create a world
     *
     * @param \Swagger\Client\Model\CreateWorldRequest $create_world_request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\WorldResponse
     */
    public function createWorld($create_world_request)
    {
        list($response) = $this->createWorldWithHttpInfo($create_world_request);
        return $response;
    }

    /**
     * Operation createWorldWithHttpInfo
     *
     * Create a world
     *
     * @param \Swagger\Client\Model\CreateWorldRequest $create_world_request  (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\WorldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createWorldWithHttpInfo($create_world_request)
    {
        // verify the required parameter 'create_world_request' is set
        if ($create_world_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $create_world_request when calling createWorld');
        }
        // parse inputs
        $resourcePath = "/world";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($create_world_request)) {
            $_tempBody = $create_world_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-webapi-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-webapi-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\WorldResponse',
                '/world'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\WorldResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\WorldResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteWorld
     *
     * Delete a world
     *
     * @param string $uuid The uuid of the world. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\WorldResponse
     */
    public function deleteWorld($uuid)
    {
        list($response) = $this->deleteWorldWithHttpInfo($uuid);
        return $response;
    }

    /**
     * Operation deleteWorldWithHttpInfo
     *
     * Delete a world
     *
     * @param string $uuid The uuid of the world. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\WorldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteWorldWithHttpInfo($uuid)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling deleteWorld');
        }
        // parse inputs
        $resourcePath = "/world/{uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                "{" . "uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-webapi-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-webapi-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\WorldResponse',
                '/world/{uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\WorldResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\WorldResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation executeWorldMethod
     *
     * Execute world methods
     *
     * @param string $uuid The uuid of the world. (required)
     * @param \Swagger\Client\Model\RawRequest $request Information about which method to execute. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ExecuteWorldMethodResponse
     */
    public function executeWorldMethod($uuid, $request)
    {
        list($response) = $this->executeWorldMethodWithHttpInfo($uuid, $request);
        return $response;
    }

    /**
     * Operation executeWorldMethodWithHttpInfo
     *
     * Execute world methods
     *
     * @param string $uuid The uuid of the world. (required)
     * @param \Swagger\Client\Model\RawRequest $request Information about which method to execute. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ExecuteWorldMethodResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function executeWorldMethodWithHttpInfo($uuid, $request)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling executeWorldMethod');
        }
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling executeWorldMethod');
        }
        // parse inputs
        $resourcePath = "/world/{uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                "{" . "uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-webapi-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-webapi-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ExecuteWorldMethodResponse',
                '/world/{uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ExecuteWorldMethodResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ExecuteWorldMethodResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getChunk
     *
     * Detailed chunk info
     *
     * @param string $uuid The uuid of the world. (required)
     * @param string $x The x-coordinate of the chunk. (required)
     * @param string $z The z-coordinate of the chunk. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ChunkResponse
     */
    public function getChunk($uuid, $x, $z)
    {
        list($response) = $this->getChunkWithHttpInfo($uuid, $x, $z);
        return $response;
    }

    /**
     * Operation getChunkWithHttpInfo
     *
     * Detailed chunk info
     *
     * @param string $uuid The uuid of the world. (required)
     * @param string $x The x-coordinate of the chunk. (required)
     * @param string $z The z-coordinate of the chunk. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ChunkResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChunkWithHttpInfo($uuid, $x, $z)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling getChunk');
        }
        // verify the required parameter 'x' is set
        if ($x === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x when calling getChunk');
        }
        // verify the required parameter 'z' is set
        if ($z === null) {
            throw new \InvalidArgumentException('Missing the required parameter $z when calling getChunk');
        }
        // parse inputs
        $resourcePath = "/world/{uuid}/chunk/{x}/{z}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                "{" . "uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }
        // path params
        if ($x !== null) {
            $resourcePath = str_replace(
                "{" . "x" . "}",
                $this->apiClient->getSerializer()->toPathValue($x),
                $resourcePath
            );
        }
        // path params
        if ($z !== null) {
            $resourcePath = str_replace(
                "{" . "z" . "}",
                $this->apiClient->getSerializer()->toPathValue($z),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-webapi-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-webapi-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ChunkResponse',
                '/world/{uuid}/chunk/{x}/{z}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ChunkResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ChunkResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getChunks
     *
     * Loaded chunk list
     *
     * @param string $uuid The uuid of the world. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ChunksResponse
     */
    public function getChunks($uuid)
    {
        list($response) = $this->getChunksWithHttpInfo($uuid);
        return $response;
    }

    /**
     * Operation getChunksWithHttpInfo
     *
     * Loaded chunk list
     *
     * @param string $uuid The uuid of the world. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ChunksResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getChunksWithHttpInfo($uuid)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling getChunks');
        }
        // parse inputs
        $resourcePath = "/world/{uuid}/chunk";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                "{" . "uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-webapi-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-webapi-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ChunksResponse',
                '/world/{uuid}/chunk'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ChunksResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ChunksResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getWorld
     *
     * Detailed world info
     *
     * @param string $uuid The uuid of the world to get detailed information about. (required)
     * @param string $fields An optional list of additional fields to get. (optional)
     * @param string $methods An optional list of additional methods to get. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\WorldResponse
     */
    public function getWorld($uuid, $fields = null, $methods = null)
    {
        list($response) = $this->getWorldWithHttpInfo($uuid, $fields, $methods);
        return $response;
    }

    /**
     * Operation getWorldWithHttpInfo
     *
     * Detailed world info
     *
     * @param string $uuid The uuid of the world to get detailed information about. (required)
     * @param string $fields An optional list of additional fields to get. (optional)
     * @param string $methods An optional list of additional methods to get. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\WorldResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWorldWithHttpInfo($uuid, $fields = null, $methods = null)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling getWorld');
        }
        // parse inputs
        $resourcePath = "/world/{uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // query params
        if ($methods !== null) {
            $queryParams['methods'] = $this->apiClient->getSerializer()->toQueryValue($methods);
        }
        // path params
        if ($uuid !== null) {
            $resourcePath = str_replace(
                "{" . "uuid" . "}",
                $this->apiClient->getSerializer()->toPathValue($uuid),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-webapi-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-webapi-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\WorldResponse',
                '/world/{uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\WorldResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\WorldResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getWorlds
     *
     * World list
     *
     * @param string $details Pass this parameter to receive the full details for each world. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\WorldsResponse
     */
    public function getWorlds($details = null)
    {
        list($response) = $this->getWorldsWithHttpInfo($details);
        return $response;
    }

    /**
     * Operation getWorldsWithHttpInfo
     *
     * World list
     *
     * @param string $details Pass this parameter to receive the full details for each world. (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\WorldsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getWorldsWithHttpInfo($details = null)
    {
        // parse inputs
        $resourcePath = "/world";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($details !== null) {
            $queryParams['details'] = $this->apiClient->getSerializer()->toQueryValue($details);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-webapi-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-webapi-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('key');
        if (strlen($apiKey) !== 0) {
            $queryParams['key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\WorldsResponse',
                '/world'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\WorldsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\WorldsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
