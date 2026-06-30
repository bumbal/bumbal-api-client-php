# BumbalClient\QuestionnaireTypeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListQuestionnaireType**](QuestionnaireTypeApi.md#retrieveListQuestionnaireType) | **PUT** /questionnaire-type | Retrieve List of QuestionnaireType
[**retrieveQuestionnaireType**](QuestionnaireTypeApi.md#retrieveQuestionnaireType) | **GET** /questionnaire-type/{questionnaire-typeId} | Retrieve a QuestionnaireType


# **retrieveListQuestionnaireType**
> \BumbalClient\Model\QuestionnaireTypeListResponse retrieveListQuestionnaireType($arguments)

Retrieve List of QuestionnaireType

Retrieve List of QuestionnaireType

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

$apiInstance = new BumbalClient\Api\QuestionnaireTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\QuestionnaireTypeRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireTypeRetrieveListArguments | QuestionnaireType RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListQuestionnaireType($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireTypeApi->retrieveListQuestionnaireType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireTypeRetrieveListArguments**](../Model/QuestionnaireTypeRetrieveListArguments.md)| QuestionnaireType RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireTypeListResponse**](../Model/QuestionnaireTypeListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireType**
> \BumbalClient\Model\QuestionnaireTypeModel retrieveQuestionnaireType($questionnaire_type_id)

Retrieve a QuestionnaireType

Retrieve an QuestionnaireType

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

$apiInstance = new BumbalClient\Api\QuestionnaireTypeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$questionnaire_type_id = 789; // int | ID of QuestionnaireType to retrieve

try {
    $result = $apiInstance->retrieveQuestionnaireType($questionnaire_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireTypeApi->retrieveQuestionnaireType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_type_id** | **int**| ID of QuestionnaireType to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireTypeModel**](../Model/QuestionnaireTypeModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

