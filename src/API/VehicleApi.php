<?php
/**
 * VehicleApi
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client Api
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: info@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\API;

use \BumbalClient\ApiClient;
use \BumbalClient\ApiException;
use \BumbalClient\Configuration;
use \BumbalClient\ObjectSerializer;

/**
 * VehicleApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VehicleApi
{
    /**
     * API Client
     *
     * @var \BumbalClient\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \BumbalClient\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\BumbalClient\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \BumbalClient\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \BumbalClient\ApiClient $apiClient set the API client
     *
     * @return VehicleApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createVehicle
     *
     * Add a new vehicle
     *
     * @param \BumbalClient\Model\VehicleModel $body Vehicle object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse57
     */
    public function createVehicle($body = null)
    {
        list($response) = $this->createVehicleWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createVehicleWithHttpInfo
     *
     * Add a new vehicle
     *
     * @param \BumbalClient\Model\VehicleModel $body Vehicle object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse57, HTTP status code, HTTP response headers (array of strings)
     */
    public function createVehicleWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/vehicle";
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse57',
                '/vehicle'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse57', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse57', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse405', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteVehicle
     *
     * Delete a vehicle entry
     *
     * @param int $vehicle_id ID of vehicle to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse58
     */
    public function deleteVehicle($vehicle_id)
    {
        list($response) = $this->deleteVehicleWithHttpInfo($vehicle_id);
        return $response;
    }

    /**
     * Operation deleteVehicleWithHttpInfo
     *
     * Delete a vehicle entry
     *
     * @param int $vehicle_id ID of vehicle to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse58, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteVehicleWithHttpInfo($vehicle_id)
    {
        // verify the required parameter 'vehicle_id' is set
        if ($vehicle_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $vehicle_id when calling deleteVehicle');
        }
        // parse inputs
        $resourcePath = "/vehicle/{vehicleId}";
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
        if ($vehicle_id !== null) {
            $resourcePath = str_replace(
                "{" . "vehicleId" . "}",
                $this->apiClient->getSerializer()->toPathValue($vehicle_id),
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
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse58',
                '/vehicle/{vehicleId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse58', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse58', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse401', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse403', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse59', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse405', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListVehicle
     *
     * Retrieve List of Vehicles
     *
     * @param \BumbalClient\Model\VehicleRetrieveListArguments $arguments Vehicle RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\VehicleListResponse
     */
    public function retrieveListVehicle($arguments)
    {
        list($response) = $this->retrieveListVehicleWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListVehicleWithHttpInfo
     *
     * Retrieve List of Vehicles
     *
     * @param \BumbalClient\Model\VehicleRetrieveListArguments $arguments Vehicle RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\VehicleListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListVehicleWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListVehicle');
        }
        // parse inputs
        $resourcePath = "/vehicle";
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
        if (isset($arguments)) {
            $_tempBody = $arguments;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\VehicleListResponse',
                '/vehicle'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\VehicleListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\VehicleListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveVehicle
     *
     * Find vehicle by ID
     *
     * @param int $vehicle_id ID of vehicle to return (required)
     * @param bool $include_vehicle_tags a list of tags bound to vehicle (required)
     * @param bool $include_updated_by include updated_by_name (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\VehicleModel
     */
    public function retrieveVehicle($vehicle_id, $include_vehicle_tags, $include_updated_by)
    {
        list($response) = $this->retrieveVehicleWithHttpInfo($vehicle_id, $include_vehicle_tags, $include_updated_by);
        return $response;
    }

    /**
     * Operation retrieveVehicleWithHttpInfo
     *
     * Find vehicle by ID
     *
     * @param int $vehicle_id ID of vehicle to return (required)
     * @param bool $include_vehicle_tags a list of tags bound to vehicle (required)
     * @param bool $include_updated_by include updated_by_name (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\VehicleModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveVehicleWithHttpInfo($vehicle_id, $include_vehicle_tags, $include_updated_by)
    {
        // verify the required parameter 'vehicle_id' is set
        if ($vehicle_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $vehicle_id when calling retrieveVehicle');
        }
        // verify the required parameter 'include_vehicle_tags' is set
        if ($include_vehicle_tags === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_vehicle_tags when calling retrieveVehicle');
        }
        // verify the required parameter 'include_updated_by' is set
        if ($include_updated_by === null) {
            throw new \InvalidArgumentException('Missing the required parameter $include_updated_by when calling retrieveVehicle');
        }
        // parse inputs
        $resourcePath = "/vehicle/{vehicleId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // query params
        if ($include_vehicle_tags !== null) {
            $queryParams['include_vehicle_tags'] = $this->apiClient->getSerializer()->toQueryValue($include_vehicle_tags);
        }
        // query params
        if ($include_updated_by !== null) {
            $queryParams['include_updated_by'] = $this->apiClient->getSerializer()->toQueryValue($include_updated_by);
        }
        // path params
        if ($vehicle_id !== null) {
            $resourcePath = str_replace(
                "{" . "vehicleId" . "}",
                $this->apiClient->getSerializer()->toPathValue($vehicle_id),
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
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\VehicleModel',
                '/vehicle/{vehicleId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\VehicleModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\VehicleModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setVehicle
     *
     * Set (create or update) a vehicle
     *
     * @param \BumbalClient\Model\VehicleModel $body Vehicle object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function setVehicle($body = null)
    {
        list($response) = $this->setVehicleWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setVehicleWithHttpInfo
     *
     * Set (create or update) a vehicle
     *
     * @param \BumbalClient\Model\VehicleModel $body Vehicle object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setVehicleWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/vehicle/set";
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
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/vehicle/set'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateVehicle
     *
     * Update a vehicle
     *
     * @param int $vehicle_id ID of vehicle to update (required)
     * @param \BumbalClient\Model\VehicleModel $body Vehicle object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function updateVehicle($vehicle_id, $body = null)
    {
        list($response) = $this->updateVehicleWithHttpInfo($vehicle_id, $body);
        return $response;
    }

    /**
     * Operation updateVehicleWithHttpInfo
     *
     * Update a vehicle
     *
     * @param int $vehicle_id ID of vehicle to update (required)
     * @param \BumbalClient\Model\VehicleModel $body Vehicle object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateVehicleWithHttpInfo($vehicle_id, $body = null)
    {
        // verify the required parameter 'vehicle_id' is set
        if ($vehicle_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $vehicle_id when calling updateVehicle');
        }
        // parse inputs
        $resourcePath = "/vehicle/{vehicleId}";
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
        if ($vehicle_id !== null) {
            $resourcePath = str_replace(
                "{" . "vehicleId" . "}",
                $this->apiClient->getSerializer()->toPathValue($vehicle_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('ApiKey');
        if (strlen($apiKey) !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/vehicle/{vehicleId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
