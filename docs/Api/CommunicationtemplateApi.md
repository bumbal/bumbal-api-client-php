# BumbalClient\CommunicationtemplateApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCommunicationTemplate**](CommunicationtemplateApi.md#createCommunicationTemplate) | **POST** /communication-template/set | Create a Communication Template
[**deleteCommunicationTemplate**](CommunicationtemplateApi.md#deleteCommunicationTemplate) | **DELETE** /communication-template/{communicationTemplateId} | Delete a communicationtemplate
[**retrieveCommunicationTemplate**](CommunicationtemplateApi.md#retrieveCommunicationTemplate) | **GET** /communication-template/{communicationTemplateId} | Retrieve a communication template
[**retrieveListTemplate**](CommunicationtemplateApi.md#retrieveListTemplate) | **PUT** /communication-template | Retrieve List of Templates


# **createCommunicationTemplate**
> \BumbalClient\Model\ApiResponse createCommunicationTemplate($body)

Create a Communication Template

Create a template for a message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BumbalClient\Api\CommunicationtemplateApi();
$body = new \BumbalClient\Model\CommunicationTemplateModel(); // \BumbalClient\Model\CommunicationTemplateModel | CommunicationTemplate object

try {
    $result = $api_instance->createCommunicationTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationtemplateApi->createCommunicationTemplate: ', $e->getMessage(), PHP_EOL;
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

Delete a communicationtemplate

Delete a communicationtemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BumbalClient\Api\CommunicationtemplateApi();
$communication_template_id = 789; // int | ID of the communication template to delete

try {
    $result = $api_instance->deleteCommunicationTemplate($communication_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationtemplateApi->deleteCommunicationTemplate: ', $e->getMessage(), PHP_EOL;
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

# **retrieveCommunicationTemplate**
> \BumbalClient\Model\CommunicationTemplateModel retrieveCommunicationTemplate($communication_template_id)

Retrieve a communication template

Retrieve a communication template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BumbalClient\Api\CommunicationtemplateApi();
$communication_template_id = 789; // int | ID of communication template to return

try {
    $result = $api_instance->retrieveCommunicationTemplate($communication_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationtemplateApi->retrieveCommunicationTemplate: ', $e->getMessage(), PHP_EOL;
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

Retrieve List of Templates

Retrieve List of Template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');
// Configure API key authorization: jwt
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new BumbalClient\Api\CommunicationtemplateApi();
$arguments = new \BumbalClient\Model\CommunicationTemplateRetrieveListArguments(); // \BumbalClient\Model\CommunicationTemplateRetrieveListArguments | Template RetrieveList Arguments

try {
    $result = $api_instance->retrieveListTemplate($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationtemplateApi->retrieveListTemplate: ', $e->getMessage(), PHP_EOL;
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

