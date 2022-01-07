# BumbalClient\ManualwebhookApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**manualWebHookTrigger**](ManualwebhookApi.md#manualWebHookTrigger) | **POST** /manual-web-hook/trigger | Trigger a webhook


# **manualWebHookTrigger**
> \BumbalClient\Model\ApiResponse manualWebHookTrigger($body)

Trigger a webhook

Manually trigger a webhook

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

$api_instance = new BumbalClient\Api\ManualwebhookApi();
$body = new \BumbalClient\Model\ManualWebHookModel(); // \BumbalClient\Model\ManualWebHookModel | WebHook that has to be triggered manually

try {
    $result = $api_instance->manualWebHookTrigger($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManualwebhookApi->manualWebHookTrigger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ManualWebHookModel**](../Model/ManualWebHookModel.md)| WebHook that has to be triggered manually | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

