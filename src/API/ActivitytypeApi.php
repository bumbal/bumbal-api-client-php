<?php
/**
 * ActivitytypeApi
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
 * Contact: gerb@bumbal.eu
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
 * ActivitytypeApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivitytypeApi
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
     * @return ActivitytypeApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation retrieveActivityType
     *
     * Find ActivityType by ID
     *
     * @param int $activity_type_id ID of ActivityType to return (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ActivityTypeModel
     */
    public function retrieveActivityType($activity_type_id)
    {
        list($response) = $this->retrieveActivityTypeWithHttpInfo($activity_type_id);
        return $response;
    }

    /**
     * Operation retrieveActivityTypeWithHttpInfo
     *
     * Find ActivityType by ID
     *
     * @param int $activity_type_id ID of ActivityType to return (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ActivityTypeModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveActivityTypeWithHttpInfo($activity_type_id)
    {
        // verify the required parameter 'activity_type_id' is set
        if ($activity_type_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $activity_type_id when calling retrieveActivityType');
        }
        // parse inputs
        $resourcePath = "/activity-type/{activityTypeId}";
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
        if ($activity_type_id !== null) {
            $resourcePath = str_replace(
                "{" . "activityTypeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($activity_type_id),
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
        if (strlen($apiKey ?? '') !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey ?? '') !== 0) {
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
                '\BumbalClient\Model\ActivityTypeModel',
                '/activity-type/{activityTypeId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ActivityTypeModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ActivityTypeModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListActivityType
     *
     * Retrieve List of ActivityTypes
     *
     * @param \BumbalClient\Model\ActivityTypeRetrieveListArguments $arguments ActivityType RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ActivityTypeListResponse
     */
    public function retrieveListActivityType($arguments)
    {
        list($response) = $this->retrieveListActivityTypeWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListActivityTypeWithHttpInfo
     *
     * Retrieve List of ActivityTypes
     *
     * @param \BumbalClient\Model\ActivityTypeRetrieveListArguments $arguments ActivityType RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ActivityTypeListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListActivityTypeWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListActivityType');
        }
        // parse inputs
        $resourcePath = "/activity-type";
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
        if (strlen($apiKey ?? '') !== 0) {
            $headerParams['ApiKey'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey ?? '') !== 0) {
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
                '\BumbalClient\Model\ActivityTypeListResponse',
                '/activity-type'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ActivityTypeListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ActivityTypeListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
