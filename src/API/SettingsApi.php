<?php
/**
 * SettingsApi
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
 * Contact: support@bumbal.eu
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
 * SettingsApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SettingsApi
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
    public function __construct(?\BumbalClient\ApiClient $apiClient = null)
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
     * @return SettingsApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getConstants
     *
     * getConstants, returns in structure 'string':'string', can contain rounding errors for floating points
     *
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\SettingsGetConstantsResponse
     */
    public function getConstants()
    {
        list($response) = $this->getConstantsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getConstantsWithHttpInfo
     *
     * getConstants, returns in structure 'string':'string', can contain rounding errors for floating points
     *
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\SettingsGetConstantsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getConstantsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/settings/get-constants";
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
                '\BumbalClient\Model\SettingsGetConstantsResponse',
                '/settings/get-constants'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\SettingsGetConstantsResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\SettingsGetConstantsResponse', $e->getResponseHeaders());
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
     * Operation getConstantsReversed
     *
     * getConstantsReversed, returns in structure 'string':int/float
     *
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\SettingsGetConstantsReversedResponse
     */
    public function getConstantsReversed()
    {
        list($response) = $this->getConstantsReversedWithHttpInfo();
        return $response;
    }

    /**
     * Operation getConstantsReversedWithHttpInfo
     *
     * getConstantsReversed, returns in structure 'string':int/float
     *
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\SettingsGetConstantsReversedResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getConstantsReversedWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/settings/get-constants-reversed";
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
                '\BumbalClient\Model\SettingsGetConstantsReversedResponse',
                '/settings/get-constants-reversed'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\SettingsGetConstantsReversedResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\SettingsGetConstantsReversedResponse', $e->getResponseHeaders());
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
     * Operation retrieveListSettings
     *
     * Retrieve List of Settings
     *
     * @param \BumbalClient\Model\SettingsRetrieveListArguments $arguments Settings RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\SettingsModel[]
     */
    public function retrieveListSettings($arguments)
    {
        list($response) = $this->retrieveListSettingsWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListSettingsWithHttpInfo
     *
     * Retrieve List of Settings
     *
     * @param \BumbalClient\Model\SettingsRetrieveListArguments $arguments Settings RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\SettingsModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListSettingsWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListSettings');
        }
        // parse inputs
        $resourcePath = "/settings";
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
                '\BumbalClient\Model\SettingsModel[]',
                '/settings'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\SettingsModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\SettingsModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveSettings
     *
     * Retrieve a Settings
     *
     * @param int $settings_id ID of settings to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\SettingsModel
     */
    public function retrieveSettings($settings_id)
    {
        list($response) = $this->retrieveSettingsWithHttpInfo($settings_id);
        return $response;
    }

    /**
     * Operation retrieveSettingsWithHttpInfo
     *
     * Retrieve a Settings
     *
     * @param int $settings_id ID of settings to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\SettingsModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveSettingsWithHttpInfo($settings_id)
    {
        // verify the required parameter 'settings_id' is set
        if ($settings_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $settings_id when calling retrieveSettings');
        }
        // parse inputs
        $resourcePath = "/settings/{settingsId}";
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
        if ($settings_id !== null) {
            $resourcePath = str_replace(
                "{" . "settingsId" . "}",
                $this->apiClient->getSerializer()->toPathValue($settings_id),
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
                '\BumbalClient\Model\SettingsModel',
                '/settings/{settingsId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\SettingsModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\SettingsModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setSetting
     *
     * Set (update) Setting value
     *
     * @param \BumbalClient\Model\SettingsModel $body Setting object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function setSetting($body = null)
    {
        list($response) = $this->setSettingWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setSettingWithHttpInfo
     *
     * Set (update) Setting value
     *
     * @param \BumbalClient\Model\SettingsModel $body Setting object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setSettingWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/settings/set";
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/settings/set'
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
     * Operation updateSettings
     *
     * Update a Settings
     *
     * @param int $settings_id ID of settings to update (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function updateSettings($settings_id)
    {
        list($response) = $this->updateSettingsWithHttpInfo($settings_id);
        return $response;
    }

    /**
     * Operation updateSettingsWithHttpInfo
     *
     * Update a Settings
     *
     * @param int $settings_id ID of settings to update (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateSettingsWithHttpInfo($settings_id)
    {
        // verify the required parameter 'settings_id' is set
        if ($settings_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $settings_id when calling updateSettings');
        }
        // parse inputs
        $resourcePath = "/settings/{settingsId}";
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
        if ($settings_id !== null) {
            $resourcePath = str_replace(
                "{" . "settingsId" . "}",
                $this->apiClient->getSerializer()->toPathValue($settings_id),
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/settings/{settingsId}'
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
