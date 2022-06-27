<?php
/**
 * QuestionnairetemplatequestionApi
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
 * QuestionnairetemplatequestionApi Class Doc Comment
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QuestionnairetemplatequestionApi
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
     * @return QuestionnairetemplatequestionApi
     */
    public function setApiClient(\BumbalClient\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createQuestionnaireTemplateQuestion
     *
     * Add a new QuestionnaireTemplateQuestion
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionModel $body QuestionnaireTemplateQuestion object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse38
     */
    public function createQuestionnaireTemplateQuestion($body = null)
    {
        list($response) = $this->createQuestionnaireTemplateQuestionWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation createQuestionnaireTemplateQuestionWithHttpInfo
     *
     * Add a new QuestionnaireTemplateQuestion
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionModel $body QuestionnaireTemplateQuestion object that needs to be created (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse38, HTTP status code, HTTP response headers (array of strings)
     */
    public function createQuestionnaireTemplateQuestionWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/questionnaire-template-question";
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
                '\BumbalClient\Model\ApiResponse38',
                '/questionnaire-template-question'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse38', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse38', $e->getResponseHeaders());
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
     * Operation deleteQuestionnaireTemplateQuestion
     *
     * Delete an QuestionnaireTemplateQuestion entry
     *
     * @param int $questionnaire_template_question_id ID of QuestionnaireTemplateQuestion to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse36
     */
    public function deleteQuestionnaireTemplateQuestion($questionnaire_template_question_id)
    {
        list($response) = $this->deleteQuestionnaireTemplateQuestionWithHttpInfo($questionnaire_template_question_id);
        return $response;
    }

    /**
     * Operation deleteQuestionnaireTemplateQuestionWithHttpInfo
     *
     * Delete an QuestionnaireTemplateQuestion entry
     *
     * @param int $questionnaire_template_question_id ID of QuestionnaireTemplateQuestion to delete (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse36, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteQuestionnaireTemplateQuestionWithHttpInfo($questionnaire_template_question_id)
    {
        // verify the required parameter 'questionnaire_template_question_id' is set
        if ($questionnaire_template_question_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $questionnaire_template_question_id when calling deleteQuestionnaireTemplateQuestion');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question/{questionnaireTemplateQuestionId}";
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
        if ($questionnaire_template_question_id !== null) {
            $resourcePath = str_replace(
                "{" . "questionnaireTemplateQuestionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($questionnaire_template_question_id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\BumbalClient\Model\ApiResponse36',
                '/questionnaire-template-question/{questionnaireTemplateQuestionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse36', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse36', $e->getResponseHeaders());
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
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse37', $e->getResponseHeaders());
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
     * Operation retrieveListQuestionnaireTemplateQuestion
     *
     * Retrieve List of QuestionnaireTemplateQuestion
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionRetrieveListArguments $arguments QuestionnaireTemplateQuestion RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\QuestionnaireTemplateQuestionListResponse
     */
    public function retrieveListQuestionnaireTemplateQuestion($arguments)
    {
        list($response) = $this->retrieveListQuestionnaireTemplateQuestionWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListQuestionnaireTemplateQuestionWithHttpInfo
     *
     * Retrieve List of QuestionnaireTemplateQuestion
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionRetrieveListArguments $arguments QuestionnaireTemplateQuestion RetrieveList Arguments (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\QuestionnaireTemplateQuestionListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListQuestionnaireTemplateQuestionWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListQuestionnaireTemplateQuestion');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question";
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
                '\BumbalClient\Model\QuestionnaireTemplateQuestionListResponse',
                '/questionnaire-template-question'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\QuestionnaireTemplateQuestionListResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\QuestionnaireTemplateQuestionListResponse', $e->getResponseHeaders());
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
     * Operation retrieveQuestionnaireTemplateQuestion
     *
     * Retrieve a QuestionnaireTemplateQuestion
     *
     * @param int $questionnaire_template_question_id ID of QuestionnaireTemplateQuestion to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\QuestionnaireTemplateQuestionModel
     */
    public function retrieveQuestionnaireTemplateQuestion($questionnaire_template_question_id)
    {
        list($response) = $this->retrieveQuestionnaireTemplateQuestionWithHttpInfo($questionnaire_template_question_id);
        return $response;
    }

    /**
     * Operation retrieveQuestionnaireTemplateQuestionWithHttpInfo
     *
     * Retrieve a QuestionnaireTemplateQuestion
     *
     * @param int $questionnaire_template_question_id ID of QuestionnaireTemplateQuestion to retrieve (required)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\QuestionnaireTemplateQuestionModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveQuestionnaireTemplateQuestionWithHttpInfo($questionnaire_template_question_id)
    {
        // verify the required parameter 'questionnaire_template_question_id' is set
        if ($questionnaire_template_question_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $questionnaire_template_question_id when calling retrieveQuestionnaireTemplateQuestion');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question/{questionnaireTemplateQuestionId}";
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
        if ($questionnaire_template_question_id !== null) {
            $resourcePath = str_replace(
                "{" . "questionnaireTemplateQuestionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($questionnaire_template_question_id),
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
                '\BumbalClient\Model\QuestionnaireTemplateQuestionModel',
                '/questionnaire-template-question/{questionnaireTemplateQuestionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\QuestionnaireTemplateQuestionModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\QuestionnaireTemplateQuestionModel', $e->getResponseHeaders());
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
     * Operation setQuestionnaireTemplateQuestion
     *
     * Set (create or update) a QuestionnaireTemplateQuestion
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionModel $body QuestionnaireTemplateQuestion object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse
     */
    public function setQuestionnaireTemplateQuestion($body = null)
    {
        list($response) = $this->setQuestionnaireTemplateQuestionWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation setQuestionnaireTemplateQuestionWithHttpInfo
     *
     * Set (create or update) a QuestionnaireTemplateQuestion
     *
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionModel $body QuestionnaireTemplateQuestion object (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function setQuestionnaireTemplateQuestionWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/questionnaire-template-question/set";
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
                '/questionnaire-template-question/set'
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
     * Operation updateQuestionnaireTemplateQuestion
     *
     * Update a specific QuestionnaireTemplateQuestion object
     *
     * @param int $questionnaire_template_question_id ID of the QuestionnaireTemplateQuestion object to update (required)
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionModel $body QuestionnaireTemplateQuestion object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return \BumbalClient\Model\ApiResponse35
     */
    public function updateQuestionnaireTemplateQuestion($questionnaire_template_question_id, $body = null)
    {
        list($response) = $this->updateQuestionnaireTemplateQuestionWithHttpInfo($questionnaire_template_question_id, $body);
        return $response;
    }

    /**
     * Operation updateQuestionnaireTemplateQuestionWithHttpInfo
     *
     * Update a specific QuestionnaireTemplateQuestion object
     *
     * @param int $questionnaire_template_question_id ID of the QuestionnaireTemplateQuestion object to update (required)
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionModel $body QuestionnaireTemplateQuestion object that needs to be updated (optional)
     * @throws \BumbalClient\ApiException on non-2xx response
     * @return array of \BumbalClient\Model\ApiResponse35, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateQuestionnaireTemplateQuestionWithHttpInfo($questionnaire_template_question_id, $body = null)
    {
        // verify the required parameter 'questionnaire_template_question_id' is set
        if ($questionnaire_template_question_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $questionnaire_template_question_id when calling updateQuestionnaireTemplateQuestion');
        }
        // parse inputs
        $resourcePath = "/questionnaire-template-question/{questionnaireTemplateQuestionId}";
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
        if ($questionnaire_template_question_id !== null) {
            $resourcePath = str_replace(
                "{" . "questionnaireTemplateQuestionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($questionnaire_template_question_id),
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
                '\BumbalClient\Model\ApiResponse35',
                '/questionnaire-template-question/{questionnaireTemplateQuestionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\BumbalClient\Model\ApiResponse35', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\BumbalClient\Model\ApiResponse35', $e->getResponseHeaders());
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
