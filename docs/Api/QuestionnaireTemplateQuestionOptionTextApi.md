# BumbalClient\QuestionnaireTemplateQuestionOptionTextApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createQuestionnaireTemplateQuestionOptionText**](QuestionnaireTemplateQuestionOptionTextApi.md#createQuestionnaireTemplateQuestionOptionText) | **POST** /questionnaire-template-question-option-text | Add a new QuestionnaireTemplateQuestionOptionText
[**deleteQuestionnaireTemplateQuestionOptionText**](QuestionnaireTemplateQuestionOptionTextApi.md#deleteQuestionnaireTemplateQuestionOptionText) | **DELETE** /questionnaire-template-question-option-text/{questionnaire-template-question-option-textId} | Delete an QuestionnaireTemplateQuestionOptionText entry
[**retrieveListQuestionnaireTemplateQuestionOptionText**](QuestionnaireTemplateQuestionOptionTextApi.md#retrieveListQuestionnaireTemplateQuestionOptionText) | **PUT** /questionnaire-template-question-option-text | Retrieve List of QuestionnaireTemplateQuestionOptionText
[**retrieveQuestionnaireTemplateQuestionOptionText**](QuestionnaireTemplateQuestionOptionTextApi.md#retrieveQuestionnaireTemplateQuestionOptionText) | **GET** /questionnaire-template-question-option-text/{questionnaire-template-question-option-textId} | Retrieve a QuestionnaireTemplateQuestionOptionText
[**setQuestionnaireTemplateQuestionOptionText**](QuestionnaireTemplateQuestionOptionTextApi.md#setQuestionnaireTemplateQuestionOptionText) | **POST** /questionnaire-template-question-option-text/set | Set (create or update) a QuestionnaireTemplateQuestionOptionText
[**updateQuestionnaireTemplateQuestionOptionText**](QuestionnaireTemplateQuestionOptionTextApi.md#updateQuestionnaireTemplateQuestionOptionText) | **PUT** /questionnaire-template-question-option-text/{questionnaire-template-question-option-textId} | Update a specific QuestionnaireTemplateQuestionOptionText object


# **createQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\ApiResponse47 createQuestionnaireTemplateQuestionOptionText($body)

Add a new QuestionnaireTemplateQuestionOptionText

Add a new QuestionnaireTemplateQuestionOptionText

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

$apiInstance = new BumbalClient\Api\QuestionnaireTemplateQuestionOptionTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel | QuestionnaireTemplateQuestionOptionText object that needs to be created

try {
    $result = $apiInstance->createQuestionnaireTemplateQuestionOptionText($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireTemplateQuestionOptionTextApi->createQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel**](../Model/QuestionnaireTemplateQuestionOptionTextModel.md)| QuestionnaireTemplateQuestionOptionText object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse47**](../Model/ApiResponse47.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\ApiResponse46 deleteQuestionnaireTemplateQuestionOptionText($questionnaire_template_question_option_text_id)

Delete an QuestionnaireTemplateQuestionOptionText entry

Delete an QuestionnaireTemplateQuestionOptionText entry

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

$apiInstance = new BumbalClient\Api\QuestionnaireTemplateQuestionOptionTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$questionnaire_template_question_option_text_id = 789; // int | ID of QuestionnaireTemplateQuestionOptionText to delete

try {
    $result = $apiInstance->deleteQuestionnaireTemplateQuestionOptionText($questionnaire_template_question_option_text_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireTemplateQuestionOptionTextApi->deleteQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_template_question_option_text_id** | **int**| ID of QuestionnaireTemplateQuestionOptionText to delete |

### Return type

[**\BumbalClient\Model\ApiResponse46**](../Model/ApiResponse46.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextListResponse retrieveListQuestionnaireTemplateQuestionOptionText($arguments)

Retrieve List of QuestionnaireTemplateQuestionOptionText

Retrieve List of QuestionnaireTemplateQuestionOptionText

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

$apiInstance = new BumbalClient\Api\QuestionnaireTemplateQuestionOptionTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextRetrieveListArguments(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextRetrieveListArguments | QuestionnaireTemplateQuestionOptionText RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListQuestionnaireTemplateQuestionOptionText($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireTemplateQuestionOptionTextApi->retrieveListQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextRetrieveListArguments**](../Model/QuestionnaireTemplateQuestionOptionTextRetrieveListArguments.md)| QuestionnaireTemplateQuestionOptionText RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextListResponse**](../Model/QuestionnaireTemplateQuestionOptionTextListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel retrieveQuestionnaireTemplateQuestionOptionText($questionnaire_template_question_option_text_id)

Retrieve a QuestionnaireTemplateQuestionOptionText

Retrieve an QuestionnaireTemplateQuestionOptionText

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

$apiInstance = new BumbalClient\Api\QuestionnaireTemplateQuestionOptionTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$questionnaire_template_question_option_text_id = 789; // int | ID of QuestionnaireTemplateQuestionOptionText to retrieve

try {
    $result = $apiInstance->retrieveQuestionnaireTemplateQuestionOptionText($questionnaire_template_question_option_text_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireTemplateQuestionOptionTextApi->retrieveQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_template_question_option_text_id** | **int**| ID of QuestionnaireTemplateQuestionOptionText to retrieve |

### Return type

[**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel**](../Model/QuestionnaireTemplateQuestionOptionTextModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\ApiResponse setQuestionnaireTemplateQuestionOptionText($body)

Set (create or update) a QuestionnaireTemplateQuestionOptionText

Set (create or update) a d=QuestionnaireTemplateQuestionOptionText. If id or links are set in the data, and a corresponding QuestionnaireTemplateQuestionOptionText is found in Bumbal, an update will be performed.

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

$apiInstance = new BumbalClient\Api\QuestionnaireTemplateQuestionOptionTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel | QuestionnaireTemplateQuestionOptionText object

try {
    $result = $apiInstance->setQuestionnaireTemplateQuestionOptionText($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireTemplateQuestionOptionTextApi->setQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel**](../Model/QuestionnaireTemplateQuestionOptionTextModel.md)| QuestionnaireTemplateQuestionOptionText object | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateQuestionnaireTemplateQuestionOptionText**
> \BumbalClient\Model\ApiResponse45 updateQuestionnaireTemplateQuestionOptionText($questionnaire_template_question_option_text_id, $body)

Update a specific QuestionnaireTemplateQuestionOptionText object

Update a specific QuestionnaireTemplateQuestionOptionText object

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

$apiInstance = new BumbalClient\Api\QuestionnaireTemplateQuestionOptionTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$questionnaire_template_question_option_text_id = 789; // int | ID of the QuestionnaireTemplateQuestionOptionText object to update
$body = new \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel(); // \BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel | QuestionnaireTemplateQuestionOptionText object that needs to be updated

try {
    $result = $apiInstance->updateQuestionnaireTemplateQuestionOptionText($questionnaire_template_question_option_text_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuestionnaireTemplateQuestionOptionTextApi->updateQuestionnaireTemplateQuestionOptionText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **questionnaire_template_question_option_text_id** | **int**| ID of the QuestionnaireTemplateQuestionOptionText object to update |
 **body** | [**\BumbalClient\Model\QuestionnaireTemplateQuestionOptionTextModel**](../Model/QuestionnaireTemplateQuestionOptionTextModel.md)| QuestionnaireTemplateQuestionOptionText object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse45**](../Model/ApiResponse45.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

