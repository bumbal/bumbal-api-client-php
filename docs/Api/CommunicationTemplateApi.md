# BumbalClient\CommunicationTemplateApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCommunicationTemplate**](CommunicationTemplateApi.md#createCommunicationTemplate) | **POST** /communication-template/set | Create a communication Template
[**deleteCommunicationTemplate**](CommunicationTemplateApi.md#deleteCommunicationTemplate) | **DELETE** /communication-template/{communicationTemplateId} | Delete a communication template
[**previewTemplate**](CommunicationTemplateApi.md#previewTemplate) | **POST** /communication-template/preview | Preview a template
[**retrieveCommunicationTemplate**](CommunicationTemplateApi.md#retrieveCommunicationTemplate) | **GET** /communication-template/{communicationTemplateId} | Retrieve a communication template
[**retrieveListTemplate**](CommunicationTemplateApi.md#retrieveListTemplate) | **PUT** /communication-template | Retrieve list of templates
[**sendTestTemplate**](CommunicationTemplateApi.md#sendTestTemplate) | **POST** /communication-template/send-test | Send a test template


# **createCommunicationTemplate**
> \BumbalClient\Model\ApiResponse createCommunicationTemplate($body)

Create a communication Template

Create a template for a message

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

$apiInstance = new BumbalClient\Api\CommunicationTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\Model\CommunicationTemplateModel(); // \BumbalClient\Model\CommunicationTemplateModel | CommunicationTemplate object

try {
    $result = $apiInstance->createCommunicationTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationTemplateApi->createCommunicationTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\CommunicationTemplateModel**](../Model/CommunicationTemplateModel.md)| CommunicationTemplate object |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCommunicationTemplate**
> \BumbalClient\Model\ApiResponse deleteCommunicationTemplate($communication_template_id)

Delete a communication template

Delete a communication template

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

$apiInstance = new BumbalClient\Api\CommunicationTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_template_id = 789; // int | ID of the communication template to delete

try {
    $result = $apiInstance->deleteCommunicationTemplate($communication_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationTemplateApi->deleteCommunicationTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_template_id** | **int**| ID of the communication template to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **previewTemplate**
> \BumbalClient\Model\CommunicationTemplatePreviewResponse previewTemplate($arguments)

Preview a template

Preview a template

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

$apiInstance = new BumbalClient\Api\CommunicationTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\CommunicationTemplatePreviewArguments(); // \BumbalClient\Model\CommunicationTemplatePreviewArguments | Template Preview Arguments

try {
    $result = $apiInstance->previewTemplate($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationTemplateApi->previewTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CommunicationTemplatePreviewArguments**](../Model/CommunicationTemplatePreviewArguments.md)| Template Preview Arguments |

### Return type

[**\BumbalClient\Model\CommunicationTemplatePreviewResponse**](../Model/CommunicationTemplatePreviewResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveCommunicationTemplate**
> \BumbalClient\Model\CommunicationTemplateModel retrieveCommunicationTemplate($communication_template_id)

Retrieve a communication template

Retrieve a communication template

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

$apiInstance = new BumbalClient\Api\CommunicationTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$communication_template_id = 789; // int | ID of communication template to return

try {
    $result = $apiInstance->retrieveCommunicationTemplate($communication_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationTemplateApi->retrieveCommunicationTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **communication_template_id** | **int**| ID of communication template to return |

### Return type

[**\BumbalClient\Model\CommunicationTemplateModel**](../Model/CommunicationTemplateModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListTemplate**
> \BumbalClient\Model\CommunicationTemplateListResponse retrieveListTemplate($arguments)

Retrieve list of templates

Retrieve list of templates

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

$apiInstance = new BumbalClient\Api\CommunicationTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\CommunicationTemplateRetrieveListArguments(); // \BumbalClient\Model\CommunicationTemplateRetrieveListArguments | Template RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListTemplate($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationTemplateApi->retrieveListTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CommunicationTemplateRetrieveListArguments**](../Model/CommunicationTemplateRetrieveListArguments.md)| Template RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\CommunicationTemplateListResponse**](../Model/CommunicationTemplateListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendTestTemplate**
> \BumbalClient\Model\CommunicationTemplateSendTestResponse sendTestTemplate($arguments)

Send a test template

Send a test template

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

$apiInstance = new BumbalClient\Api\CommunicationTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\Model\CommunicationTemplateSendTestArguments(); // \BumbalClient\Model\CommunicationTemplateSendTestArguments | Template Send Test Arguments

try {
    $result = $apiInstance->sendTestTemplate($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationTemplateApi->sendTestTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CommunicationTemplateSendTestArguments**](../Model/CommunicationTemplateSendTestArguments.md)| Template Send Test Arguments |

### Return type

[**\BumbalClient\Model\CommunicationTemplateSendTestResponse**](../Model/CommunicationTemplateSendTestResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

