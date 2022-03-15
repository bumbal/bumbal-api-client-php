<?php
/**
 * QuestionnairetemplatequestionoptiontextApi
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
 * QuestionnairetemplatequestionoptiontextApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuestionnairetemplatequestionoptiontextApi
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
     * @return QuestionnairetemplatequestionoptiontextApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createQuestionnaireTemplateQuestionOptionText
     *
     * Add a new QuestionnaireTemplateQuestionOptionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel $body QuestionnaireTemplateQuestionOptionText object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse47
     */
    public function createQuestionnaireTemplateQuestionOptionText($body = null)
    {
        list($response) = $this->createQuestionnaireTemplateQuestionOptionTextWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createQuestionnaireTemplateQuestionOptionTextWithHttpInfo
     *
     * Add a new QuestionnaireTemplateQuestionOptionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel $body QuestionnaireTemplateQuestionOptionText object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse47, HTTP status code, HTTP response headers (array of strings)
     */
    public function createQuestionnaireTemplateQuestionOptionTextWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/questionnaire-template-question-option-text";
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
                '\BumbalClient\Model\ApiResponse47',
                '/questionnaire-template-question-option-text'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse47', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse47', $e->getResponseHeaders());
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
     * Operation deleteQuestionnaireTemplateQuestionOptionText
     *
     * Delete an QuestionnaireTemplateQuestionOptionText entry
     *
     * @param int $notification_id ID of QuestionnaireTemplateQuestionOptionText to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse46
     */
    public function deleteQuestionnaireTemplateQuestionOptionText($notification_id)
    {
        list($response) = $this->deleteQuestionnaireTemplateQuestionOptionTextWithHttpInfo($notification_id);
        return $response;
    }

    /**
     * Operation deleteQuestionnaireTemplateQuestionOptionTextWithHttpInfo
     *
     * Delete an QuestionnaireTemplateQuestionOptionText entry
     *
     * @param int $notification_id ID of QuestionnaireTemplateQuestionOptionText to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse46, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteQuestionnaireTemplateQuestionOptionTextWithHttpInfo($notification_id)
    {
        // verify the required parameter 'notification_id' is set
        if ($notification_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $notification_id when calling deleteQuestionnaireTemplateQuestionOptionText');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question-option-text/{questionnaire-template-question-option-textId}";
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
        if ($notification_id !== null) {
            $resourcePath = str_replace(
                "{" . "notificationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($notification_id),
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
                '\BumbalClient\Model\ApiResponse46',
                '/questionnaire-template-question-option-text/{questionnaire-template-question-option-textId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse46', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse46', $e->getResponseHeaders());
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
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse18', $e->getResponseHeaders());
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
     * Operation retrieveListQuestionnaireTemplateQuestionOptionText
     *
     * Retrieve List of QuestionnaireTemplateQuestionOptionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextRetrieveListArguments $arguments QuestionnaireTemplateQuestionOptionText RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextListResponse
     */
    public function retrieveListQuestionnaireTemplateQuestionOptionText($arguments)
    {
        list($response) = $this->retrieveListQuestionnaireTemplateQuestionOptionTextWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListQuestionnaireTemplateQuestionOptionTextWithHttpInfo
     *
     * Retrieve List of QuestionnaireTemplateQuestionOptionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextRetrieveListArguments $arguments QuestionnaireTemplateQuestionOptionText RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListQuestionnaireTemplateQuestionOptionTextWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListQuestionnaireTemplateQuestionOptionText');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question-option-text";
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
                '\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextListResponse',
                '/questionnaire-template-question-option-text'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextListResponse', $e->getResponseHeaders());
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
     * Operation retrieveQuestionnaireTemplateQuestionOptionText
     *
     * Retrieve a QuestionnaireTemplateQuestionOptionText
     *
     * @param int $notification_id ID of QuestionnaireTemplateQuestionOptionText to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel
     */
    public function retrieveQuestionnaireTemplateQuestionOptionText($notification_id)
    {
        list($response) = $this->retrieveQuestionnaireTemplateQuestionOptionTextWithHttpInfo($notification_id);
        return $response;
    }

    /**
     * Operation retrieveQuestionnaireTemplateQuestionOptionTextWithHttpInfo
     *
     * Retrieve a QuestionnaireTemplateQuestionOptionText
     *
     * @param int $notification_id ID of QuestionnaireTemplateQuestionOptionText to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveQuestionnaireTemplateQuestionOptionTextWithHttpInfo($notification_id)
    {
        // verify the required parameter 'notification_id' is set
        if ($notification_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $notification_id when calling retrieveQuestionnaireTemplateQuestionOptionText');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question-option-text/{questionnaire-template-question-option-textId}";
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
        if ($notification_id !== null) {
            $resourcePath = str_replace(
                "{" . "notificationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($notification_id),
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
                '\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel',
                '/questionnaire-template-question-option-text/{questionnaire-template-question-option-textId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel', $e->getResponseHeaders());
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
     * Operation setQuestionnaireTemplateQuestionOptionText
     *
     * Set (create or update) a QuestionnaireTemplateQuestionOptionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel $body QuestionnaireTemplateQuestionOptionText object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function setQuestionnaireTemplateQuestionOptionText($body = null)
    {
        list($response) = $this->setQuestionnaireTemplateQuestionOptionTextWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setQuestionnaireTemplateQuestionOptionTextWithHttpInfo
     *
     * Set (create or update) a QuestionnaireTemplateQuestionOptionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel $body QuestionnaireTemplateQuestionOptionText object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setQuestionnaireTemplateQuestionOptionTextWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/questionnaire-template-question-option-text/set";
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
                '/questionnaire-template-question-option-text/set'
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
     * Operation updateQuestionnaireTemplateQuestionOptionText
     *
     * Update a specific QuestionnaireTemplateQuestionOptionText object
     *
     * @param int $notification_id ID of the QuestionnaireTemplateQuestionOptionText object to update (required)
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel $body QuestionnaireTemplateQuestionOptionText object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse45
     */
    public function updateQuestionnaireTemplateQuestionOptionText($notification_id, $body = null)
    {
        list($response) = $this->updateQuestionnaireTemplateQuestionOptionTextWithHttpInfo($notification_id, $body);
        return $response;
    }

    /**
     * Operation updateQuestionnaireTemplateQuestionOptionTextWithHttpInfo
     *
     * Update a specific QuestionnaireTemplateQuestionOptionText object
     *
     * @param int $notification_id ID of the QuestionnaireTemplateQuestionOptionText object to update (required)
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel $body QuestionnaireTemplateQuestionOptionText object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse45, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateQuestionnaireTemplateQuestionOptionTextWithHttpInfo($notification_id, $body = null)
    {
        // verify the required parameter 'notification_id' is set
        if ($notification_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $notification_id when calling updateQuestionnaireTemplateQuestionOptionText');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question-option-text/{questionnaire-template-question-option-textId}";
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
        if ($notification_id !== null) {
            $resourcePath = str_replace(
                "{" . "notificationId" . "}",
                $this->apiClient->getSerializer()->toPathValue($notification_id),
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
                '\BumbalClient\Model\ApiResponse45',
                '/questionnaire-template-question-option-text/{questionnaire-template-question-option-textId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse45', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse45', $e->getResponseHeaders());
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
}
