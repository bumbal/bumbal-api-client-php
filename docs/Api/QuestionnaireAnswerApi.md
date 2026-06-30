# BumbalClient\QuestionnaireAnswerApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuestionnaireAnswer**](QuestionnaireAnswerApi.md#createQuestionnaireAnswer) | **POST** /questionnaire-answer | Add a new QuestionnaireAnswer
[**deleteQuestionnaireAnswer**](QuestionnaireAnswerApi.md#deleteQuestionnaireAnswer) | **DELETE** /questionnaire-answer/{questionnaire-answerId} | Delete an QuestionnaireAnswer entry
[**retrieveListQuestionnaireAnswer**](QuestionnaireAnswerApi.md#retrieveListQuestionnaireAnswer) | **PUT** /questionnaire-answer | Retrieve List of QuestionnaireAnswer
[**retrieveQuestionnaireAnswer**](QuestionnaireAnswerApi.md#retrieveQuestionnaireAnswer) | **GET** /questionnaire-answer/{questionnaire-answerId} | Retrieve a QuestionnaireAnswer
[**setQuestionnaireAnswer**](QuestionnaireAnswerApi.md#setQuestionnaireAnswer) | **POST** /questionnaire-answer/set | Set (create or update) a QuestionnaireAnswer
[**updateQuestionnaireAnswer**](QuestionnaireAnswerApi.md#updateQuestionnaireAnswer) | **PUT** /questionnaire-answer/{questionnaire-answerId} | Update a specific QuestionnaireAnswer object


# **createQuestionnaireAnswer**
> \BumbalClient\Model\ApiResponse26 createQuestionnaireAnswer($body)

Add a new QuestionnaireAnswer

Add a new QuestionnaireAnswer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\QuestionnaireAnswerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\Model\QuestionnaireAnswerModel(); // \BumbalClient\Model\QuestionnaireAnswerModel | QuestionnaireAnswer object that needs to be created

try {
    $result = $apiInstance->createQuestionnaireAnswer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireAnswerApi->createQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireAnswerModel**](../Model/QuestionnaireAnswerModel.md)| QuestionnaireAnswer object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse26**](../Model/ApiResponse26.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestionnaireAnswer**
> \BumbalClient\Model\ApiResponse24 deleteQuestionnaireAnswer($questionnaire_answer_id)

Delete an QuestionnaireAnswer entry

Delete an QuestionnaireAnswer entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\QuestionnaireAnswerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$questionnaire_answer_id = 789; // int | ID of QuestionnaireAnswer to delete

try {
    $result = $apiInstance->deleteQuestionnaireAnswer($questionnaire_answer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireAnswerApi->deleteQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_answer_id** | **int**| ID of QuestionnaireAnswer to delete |

### Return type

[**\BumbalClient\Model\ApiResponse24**](../Model/ApiResponse24.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListQuestionnaireAnswer**
> \BumbalClient\Model\QuestionnaireAnswerListResponse retrieveListQuestionnaireAnswer($arguments)

Retrieve List of QuestionnaireAnswer

Retrieve List of QuestionnaireAnswer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\QuestionnaireAnswerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\QuestionnaireAnswerRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireAnswerRetrieveListArguments | QuestionnaireAnswer RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListQuestionnaireAnswer($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireAnswerApi->retrieveListQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireAnswerRetrieveListArguments**](../Model/QuestionnaireAnswerRetrieveListArguments.md)| QuestionnaireAnswer RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireAnswerListResponse**](../Model/QuestionnaireAnswerListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireAnswer**
> \BumbalClient\Model\QuestionnaireAnswerModel retrieveQuestionnaireAnswer($questionnaire_answer_id)

Retrieve a QuestionnaireAnswer

Retrieve an QuestionnaireAnswer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\QuestionnaireAnswerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$questionnaire_answer_id = 789; // int | ID of QuestionnaireAnswer to retrieve

try {
    $result = $apiInstance->retrieveQuestionnaireAnswer($questionnaire_answer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireAnswerApi->retrieveQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_answer_id** | **int**| ID of QuestionnaireAnswer to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireAnswerModel**](../Model/QuestionnaireAnswerModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQuestionnaireAnswer**
> \BumbalClient\Model\ApiResponse setQuestionnaireAnswer($body)

Set (create or update) a QuestionnaireAnswer

Set (create or update) a QuestionnaireAnswer. If id or links are set in the data, and a corresponding QuestionnaireAnswer is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\QuestionnaireAnswerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\Model\QuestionnaireAnswerModel(); // \BumbalClient\Model\QuestionnaireAnswerModel | QuestionnaireAnswer object

try {
    $result = $apiInstance->setQuestionnaireAnswer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireAnswerApi->setQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireAnswerModel**](../Model/QuestionnaireAnswerModel.md)| QuestionnaireAnswer object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestionnaireAnswer**
> \BumbalClient\Model\ApiResponse23 updateQuestionnaireAnswer($questionnaire_answer_id, $body)

Update a specific QuestionnaireAnswer object

Update a specific QuestionnaireAnswer object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new BumbalClient\Api\QuestionnaireAnswerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$questionnaire_answer_id = 789; // int | ID of the QuestionnaireAnswer object to update
$body = new \BumbalClient\Model\QuestionnaireAnswerModel(); // \BumbalClient\Model\QuestionnaireAnswerModel | QuestionnaireAnswer object that needs to be updated

try {
    $result = $apiInstance->updateQuestionnaireAnswer($questionnaire_answer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireAnswerApi->updateQuestionnaireAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_answer_id** | **int**| ID of the QuestionnaireAnswer object to update |
 **body** | [**\BumbalClient\Model\QuestionnaireAnswerModel**](../Model/QuestionnaireAnswerModel.md)| QuestionnaireAnswer object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse23**](../Model/ApiResponse23.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

