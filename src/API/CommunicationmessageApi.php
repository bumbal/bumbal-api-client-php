<?php
/**
 * CommunicationmessageApi
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
 * CommunicationmessageApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommunicationmessageApi
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
     * @return CommunicationmessageApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation retrieveCommunicationMessage
     *
     * Retrieve a communication message
     *
     * @param int $communication_message_id ID of template to return (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\CommunicationMessageModel
     */
    public function retrieveCommunicationMessage($communication_message_id)
    {
        list($response) = $this->retrieveCommunicationMessageWithHttpInfo($communication_message_id);
        return $response;
    }

    /**
     * Operation retrieveCommunicationMessageWithHttpInfo
     *
     * Retrieve a communication message
     *
     * @param int $communication_message_id ID of template to return (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\CommunicationMessageModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveCommunicationMessageWithHttpInfo($communication_message_id)
    {
        // verify the required parameter 'communication_message_id' is set
        if ($communication_message_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $communication_message_id when calling retrieveCommunicationMessage');
        }
        // parse inputs
        $resourcePath = "/communication-message/{communicationMessageID}";
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
        if ($communication_message_id !== null) {
            $resourcePath = str_replace(
                "{" . "communicationMessageID" . "}",
                $this->apiClient->getSerializer()->toPathValue($communication_message_id),
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
                '\BumbalClient\Model\CommunicationMessageModel',
                '/communication-message/{communicationMessageID}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\CommunicationMessageModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\CommunicationMessageModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListCommunicationMessages
     *
     * Retrieve List of communication messages
     *
     * @param \BumbalClient\Model\CommunicationMessageRetrieveListArguments $arguments Template RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\CommunicationMessageListResponse
     */
    public function retrieveListCommunicationMessages($arguments)
    {
        list($response) = $this->retrieveListCommunicationMessagesWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListCommunicationMessagesWithHttpInfo
     *
     * Retrieve List of communication messages
     *
     * @param \BumbalClient\Model\CommunicationMessageRetrieveListArguments $arguments Template RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\CommunicationMessageListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListCommunicationMessagesWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListCommunicationMessages');
        }
        // parse inputs
        $resourcePath = "/communication-message";
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
                '\BumbalClient\Model\CommunicationMessageListResponse',
                '/communication-message'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\CommunicationMessageListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\CommunicationMessageListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
