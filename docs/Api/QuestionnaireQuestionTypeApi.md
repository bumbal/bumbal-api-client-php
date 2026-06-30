# BumbalClient\QuestionnaireQuestionTypeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListQuestionnaireQuestionType**](QuestionnaireQuestionTypeApi.md#retrieveListQuestionnaireQuestionType) | **PUT** /questionnaire-question-type | Retrieve List of QuestionnaireQuestionType
[**retrieveQuestionnaireQuestionType**](QuestionnaireQuestionTypeApi.md#retrieveQuestionnaireQuestionType) | **GET** /questionnaire-question-type/{questionnaire-question-typeId} | Retrieve a QuestionnaireQuestionType


# **retrieveListQuestionnaireQuestionType**
> \BumbalClient\Model\QuestionnaireQuestionTypeListResponse retrieveListQuestionnaireQuestionType($arguments)

Retrieve List of QuestionnaireQuestionType

Retrieve List of QuestionnaireQuestionType

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

$apiInstance = new BumbalClient\Api\QuestionnaireQuestionTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\QuestionnaireQuestionTypeRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireQuestionTypeRetrieveListArguments | QuestionnaireQuestionType RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListQuestionnaireQuestionType($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireQuestionTypeApi->retrieveListQuestionnaireQuestionType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireQuestionTypeRetrieveListArguments**](../Model/QuestionnaireQuestionTypeRetrieveListArguments.md)| QuestionnaireQuestionType RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireQuestionTypeListResponse**](../Model/QuestionnaireQuestionTypeListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireQuestionType**
> \BumbalClient\Model\QuestionnaireQuestionTypeModel retrieveQuestionnaireQuestionType($questionnaire_question_type_id)

Retrieve a QuestionnaireQuestionType

Retrieve an QuestionnaireQuestionType

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

$apiInstance = new BumbalClient\Api\QuestionnaireQuestionTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$questionnaire_question_type_id = 789; // int | ID of QuestionnaireQuestionType to retrieve

try {
    $result = $apiInstance->retrieveQuestionnaireQuestionType($questionnaire_question_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireQuestionTypeApi->retrieveQuestionnaireQuestionType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_question_type_id** | **int**| ID of QuestionnaireQuestionType to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireQuestionTypeModel**](../Model/QuestionnaireQuestionTypeModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

