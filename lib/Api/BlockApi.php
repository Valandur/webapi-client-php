<?php
/**
 * BlockApi
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
 * Access Sponge powered Minecraft servers through a WebAPI  # Introduction This is the documentation of the various API routes offered by the WebAPI plugin.  This documentation assumes that you are familiar with the basic concepts of Web API's, such as `GET`, `PUT`, `POST` and `DELETE` methods, request `HEADERS` and `RESPONSE CODES` and `JSON` data.  By default this documentation can be found at http:/localhost:8080 (while your minecraft server is running) and the various routes start with http:/localhost:8080/api/...  As a quick test try reaching the route http:/localhost:8080/api/info (remember that you can only access \"localhost\" routes on the server on which you are running minecraft). This route should show you basic information about your server, like the motd and player count.  # Additional data Certain endpoints (such as `/player`, `/entity` and `/tile-entity` have additional properties which are not documented here, because the data depends on the concrete object type (eg. `Sheep` have a wool color, others do not) and on the other plugins/mods that are running on your server which might add additional data.  You can also find more information in the github docs (https:/github.com/Valandur/Web-API/tree/master/docs/DATA.md)
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
 * BlockApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BlockApi
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
     * @return BlockApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation cancelBlockOperation
     *
     * Cancel block operation
     *
     * @param string $uuid The uuid of the block operation. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BlockOperationResponse
     */
    public function cancelBlockOperation($uuid)
    {
        list($response) = $this->cancelBlockOperationWithHttpInfo($uuid);
        return $response;
    }

    /**
     * Operation cancelBlockOperationWithHttpInfo
     *
     * Cancel block operation
     *
     * @param string $uuid The uuid of the block operation. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BlockOperationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelBlockOperationWithHttpInfo($uuid)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling cancelBlockOperation');
        }
        // parse inputs
        $resourcePath = "/block/op/{uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

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
                '\Swagger\Client\Model\BlockOperationResponse',
                '/block/op/{uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BlockOperationResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BlockOperationResponse', $e->getResponseHeaders());
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
     * Operation changeBlockOperation
     *
     * Modify block operation
     *
     * @param string $uuid The uuid of the block operation. (required)
     * @param \Swagger\Client\Model\Data $data The new data applied to the block operation. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BlockOperationResponse
     */
    public function changeBlockOperation($uuid, $data)
    {
        list($response) = $this->changeBlockOperationWithHttpInfo($uuid, $data);
        return $response;
    }

    /**
     * Operation changeBlockOperationWithHttpInfo
     *
     * Modify block operation
     *
     * @param string $uuid The uuid of the block operation. (required)
     * @param \Swagger\Client\Model\Data $data The new data applied to the block operation. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BlockOperationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function changeBlockOperationWithHttpInfo($uuid, $data)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling changeBlockOperation');
        }
        // verify the required parameter 'data' is set
        if ($data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data when calling changeBlockOperation');
        }
        // parse inputs
        $resourcePath = "/block/op/{uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

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
        if (isset($data)) {
            $_tempBody = $data;
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
                '\Swagger\Client\Model\BlockOperationResponse',
                '/block/op/{uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BlockOperationResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BlockOperationResponse', $e->getResponseHeaders());
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
     * Operation getBlock
     *
     * Get one block
     *
     * @param string $world The uuid of the world the block is in. (required)
     * @param int $x The x-coordinate of the block. (required)
     * @param int $y The y-coordinate of the block. (required)
     * @param int $z The z-coordinate of the block. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\SingleBlock
     */
    public function getBlock($world, $x, $y, $z)
    {
        list($response) = $this->getBlockWithHttpInfo($world, $x, $y, $z);
        return $response;
    }

    /**
     * Operation getBlockWithHttpInfo
     *
     * Get one block
     *
     * @param string $world The uuid of the world the block is in. (required)
     * @param int $x The x-coordinate of the block. (required)
     * @param int $y The y-coordinate of the block. (required)
     * @param int $z The z-coordinate of the block. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\SingleBlock, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBlockWithHttpInfo($world, $x, $y, $z)
    {
        // verify the required parameter 'world' is set
        if ($world === null) {
            throw new \InvalidArgumentException('Missing the required parameter $world when calling getBlock');
        }
        // verify the required parameter 'x' is set
        if ($x === null) {
            throw new \InvalidArgumentException('Missing the required parameter $x when calling getBlock');
        }
        // verify the required parameter 'y' is set
        if ($y === null) {
            throw new \InvalidArgumentException('Missing the required parameter $y when calling getBlock');
        }
        // verify the required parameter 'z' is set
        if ($z === null) {
            throw new \InvalidArgumentException('Missing the required parameter $z when calling getBlock');
        }
        // parse inputs
        $resourcePath = "/block/{world}/{x}/{y}/{z}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($world !== null) {
            $resourcePath = str_replace(
                "{" . "world" . "}",
                $this->apiClient->getSerializer()->toPathValue($world),
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
        if ($y !== null) {
            $resourcePath = str_replace(
                "{" . "y" . "}",
                $this->apiClient->getSerializer()->toPathValue($y),
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
                '\Swagger\Client\Model\SingleBlock',
                '/block/{world}/{x}/{y}/{z}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SingleBlock', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SingleBlock', $e->getResponseHeaders());
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
     * Operation getBlockOperation
     *
     * Block operation details
     *
     * @param string $uuid The uuid of the block operation. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BlockOperationResponse
     */
    public function getBlockOperation($uuid)
    {
        list($response) = $this->getBlockOperationWithHttpInfo($uuid);
        return $response;
    }

    /**
     * Operation getBlockOperationWithHttpInfo
     *
     * Block operation details
     *
     * @param string $uuid The uuid of the block operation. (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BlockOperationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBlockOperationWithHttpInfo($uuid)
    {
        // verify the required parameter 'uuid' is set
        if ($uuid === null) {
            throw new \InvalidArgumentException('Missing the required parameter $uuid when calling getBlockOperation');
        }
        // parse inputs
        $resourcePath = "/block/op/{uuid}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

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
                '\Swagger\Client\Model\BlockOperationResponse',
                '/block/op/{uuid}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BlockOperationResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BlockOperationResponse', $e->getResponseHeaders());
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
     * Operation getBlockOperations
     *
     * List block operations
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BlockOperationsList
     */
    public function getBlockOperations()
    {
        list($response) = $this->getBlockOperationsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getBlockOperationsWithHttpInfo
     *
     * List block operations
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BlockOperationsList, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBlockOperationsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/block/op";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);


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
                '\Swagger\Client\Model\BlockOperationsList',
                '/block/op'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BlockOperationsList', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BlockOperationsList', $e->getResponseHeaders());
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
     * Operation startBlockOperation
     *
     * Create block operation
     *
     * @param \Swagger\Client\Model\BlockOperationNew[] $request The requested changes to blocks (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\BlockOperationResponse
     */
    public function startBlockOperation($request)
    {
        list($response) = $this->startBlockOperationWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation startBlockOperationWithHttpInfo
     *
     * Create block operation
     *
     * @param \Swagger\Client\Model\BlockOperationNew[] $request The requested changes to blocks (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\BlockOperationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function startBlockOperationWithHttpInfo($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $request when calling startBlockOperation');
        }
        // parse inputs
        $resourcePath = "/block/op";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

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
                '\Swagger\Client\Model\BlockOperationResponse',
                '/block/op'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\BlockOperationResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\BlockOperationResponse', $e->getResponseHeaders());
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
                case 406:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\InlineResponse400', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
