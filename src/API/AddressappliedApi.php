<?php
/**
 * AddressappliedApi
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
 * AddressappliedApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressappliedApi
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
     * @return AddressappliedApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation retrieveAddressApplied
     *
     * Retrieve an Applied Address
     *
     * @param int $address_id ID of the applied address to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\AddressAppliedModel
     */
    public function retrieveAddressApplied($address_id)
    {
        list($response) = $this->retrieveAddressAppliedWithHttpInfo($address_id);
        return $response;
    }

    /**
     * Operation retrieveAddressAppliedWithHttpInfo
     *
     * Retrieve an Applied Address
     *
     * @param int $address_id ID of the applied address to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\AddressAppliedModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveAddressAppliedWithHttpInfo($address_id)
    {
        // verify the required parameter 'address_id' is set
        if ($address_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address_id when calling retrieveAddressApplied');
        }
        // parse inputs
        $resourcePath = "/address-applied/{addressId}";
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
        if ($address_id !== null) {
            $resourcePath = str_replace(
                "{" . "addressId" . "}",
                $this->apiClient->getSerializer()->toPathValue($address_id),
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
                '\BumbalClient\Model\AddressAppliedModel',
                '/address-applied/{addressId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\AddressAppliedModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\AddressAppliedModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateAddressApplied
     *
     * Update a AddressApplied
     *
     * @param int $address_id ID of address to update (required)
     * @param \BumbalClient\Model\AddressAppliedModel $body AddressApplied object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function updateAddressApplied($address_id, $body = null)
    {
        list($response) = $this->updateAddressAppliedWithHttpInfo($address_id, $body);
        return $response;
    }

    /**
     * Operation updateAddressAppliedWithHttpInfo
     *
     * Update a AddressApplied
     *
     * @param int $address_id ID of address to update (required)
     * @param \BumbalClient\Model\AddressAppliedModel $body AddressApplied object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateAddressAppliedWithHttpInfo($address_id, $body = null)
    {
        // verify the required parameter 'address_id' is set
        if ($address_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $address_id when calling updateAddressApplied');
        }
        // parse inputs
        $resourcePath = "/address-applied/{addressId}";
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
        if ($address_id !== null) {
            $resourcePath = str_replace(
                "{" . "addressId" . "}",
                $this->apiClient->getSerializer()->toPathValue($address_id),
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
                '\BumbalClient\Model\ApiResponse',
                '/address-applied/{addressId}'
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
