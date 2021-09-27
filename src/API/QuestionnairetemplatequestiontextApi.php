<?php
/**
 * QuestionnairetemplatequestiontextApi
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
 * QuestionnairetemplatequestiontextApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuestionnairetemplatequestiontextApi
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
     * @return QuestionnairetemplatequestiontextApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createQuestionnaireTemplateQuestionText
     *
     * Add a new QuestionnaireTemplateQuestionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel $body QuestionnaireTemplateQuestionText object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse48
     */
    public function createQuestionnaireTemplateQuestionText($body = null)
    {
        list($response) = $this->createQuestionnaireTemplateQuestionTextWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createQuestionnaireTemplateQuestionTextWithHttpInfo
     *
     * Add a new QuestionnaireTemplateQuestionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel $body QuestionnaireTemplateQuestionText object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse48, HTTP status code, HTTP response headers (array of strings)
     */
    public function createQuestionnaireTemplateQuestionTextWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/questionnaire-template-question-text";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse48',
                '/questionnaire-template-question-text'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse48', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse48', $e->getResponseHeaders());
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
     * Operation deleteQuestionnaireTemplateQuestionText
     *
     * Delete an QuestionnaireTemplateQuestionText entry
     *
     * @param int $notification_id ID of QuestionnaireTemplateQuestionText to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse47
     */
    public function deleteQuestionnaireTemplateQuestionText($notification_id)
    {
        list($response) = $this->deleteQuestionnaireTemplateQuestionTextWithHttpInfo($notification_id);
        return $response;
    }

    /**
     * Operation deleteQuestionnaireTemplateQuestionTextWithHttpInfo
     *
     * Delete an QuestionnaireTemplateQuestionText entry
     *
     * @param int $notification_id ID of QuestionnaireTemplateQuestionText to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse47, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteQuestionnaireTemplateQuestionTextWithHttpInfo($notification_id)
    {
        // verify the required parameter 'notification_id' is set
        if ($notification_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $notification_id when calling deleteQuestionnaireTemplateQuestionText');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question-text/{questionnaire-template-question-textId}";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse47',
                '/questionnaire-template-question-text/{questionnaire-template-question-textId}'
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
     * Operation retrieveListQuestionnaireTemplateQuestionText
     *
     * Retrieve List of QuestionnaireTemplateQuestionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionTextRetrieveListArguments $arguments QuestionnaireTemplateQuestionText RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\QuestionnaireTemplateQuestionTextListResponse
     */
    public function retrieveListQuestionnaireTemplateQuestionText($arguments)
    {
        list($response) = $this->retrieveListQuestionnaireTemplateQuestionTextWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListQuestionnaireTemplateQuestionTextWithHttpInfo
     *
     * Retrieve List of QuestionnaireTemplateQuestionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionTextRetrieveListArguments $arguments QuestionnaireTemplateQuestionText RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\QuestionnaireTemplateQuestionTextListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListQuestionnaireTemplateQuestionTextWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListQuestionnaireTemplateQuestionText');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question-text";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\QuestionnaireTemplateQuestionTextListResponse',
                '/questionnaire-template-question-text'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\QuestionnaireTemplateQuestionTextListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\QuestionnaireTemplateQuestionTextListResponse', $e->getResponseHeaders());
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
     * Operation retrieveQuestionnaireTemplateQuestionText
     *
     * Retrieve a QuestionnaireTemplateQuestionText
     *
     * @param int $notification_id ID of QuestionnaireTemplateQuestionText to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel
     */
    public function retrieveQuestionnaireTemplateQuestionText($notification_id)
    {
        list($response) = $this->retrieveQuestionnaireTemplateQuestionTextWithHttpInfo($notification_id);
        return $response;
    }

    /**
     * Operation retrieveQuestionnaireTemplateQuestionTextWithHttpInfo
     *
     * Retrieve a QuestionnaireTemplateQuestionText
     *
     * @param int $notification_id ID of QuestionnaireTemplateQuestionText to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveQuestionnaireTemplateQuestionTextWithHttpInfo($notification_id)
    {
        // verify the required parameter 'notification_id' is set
        if ($notification_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $notification_id when calling retrieveQuestionnaireTemplateQuestionText');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question-text/{questionnaire-template-question-textId}";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\QuestionnaireTemplateQuestionTextModel',
                '/questionnaire-template-question-text/{questionnaire-template-question-textId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\QuestionnaireTemplateQuestionTextModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\QuestionnaireTemplateQuestionTextModel', $e->getResponseHeaders());
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
     * Operation setQuestionnaireTemplateQuestionText
     *
     * Set (create or update) a QuestionnaireTemplateQuestionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel $body QuestionnaireTemplateQuestionText object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function setQuestionnaireTemplateQuestionText($body = null)
    {
        list($response) = $this->setQuestionnaireTemplateQuestionTextWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setQuestionnaireTemplateQuestionTextWithHttpInfo
     *
     * Set (create or update) a QuestionnaireTemplateQuestionText
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel $body QuestionnaireTemplateQuestionText object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setQuestionnaireTemplateQuestionTextWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/questionnaire-template-question-text/set";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse',
                '/questionnaire-template-question-text/set'
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
     * Operation updateQuestionnaireTemplateQuestionText
     *
     * Update a specific QuestionnaireTemplateQuestionText object
     *
     * @param int $notification_id ID of the QuestionnaireTemplateQuestionText object to update (required)
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel $body QuestionnaireTemplateQuestionText object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse46
     */
    public function updateQuestionnaireTemplateQuestionText($notification_id, $body = null)
    {
        list($response) = $this->updateQuestionnaireTemplateQuestionTextWithHttpInfo($notification_id, $body);
        return $response;
    }

    /**
     * Operation updateQuestionnaireTemplateQuestionTextWithHttpInfo
     *
     * Update a specific QuestionnaireTemplateQuestionText object
     *
     * @param int $notification_id ID of the QuestionnaireTemplateQuestionText object to update (required)
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel $body QuestionnaireTemplateQuestionText object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse46, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateQuestionnaireTemplateQuestionTextWithHttpInfo($notification_id, $body = null)
    {
        // verify the required parameter 'notification_id' is set
        if ($notification_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $notification_id when calling updateQuestionnaireTemplateQuestionText');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question-text/{questionnaire-template-question-textId}";
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
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse46',
                '/questionnaire-template-question-text/{questionnaire-template-question-textId}'
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
                case 405:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse405', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
