# BumbalClient\AddressApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAddress**](AddressApi.md#deleteAddress) | **DELETE** /address/{addressId} | Delete an address
[**geoCodeAddress**](AddressApi.md#geoCodeAddress) | **POST** /address/geo-code | GeoCode an address
[**retrieveAddress**](AddressApi.md#retrieveAddress) | **GET** /address/{addressId} | Retrieve a Address
[**retrieveListAddress**](AddressApi.md#retrieveListAddress) | **PUT** /address | Retrieve List of Addresses
[**reverseGeoCodeAddress**](AddressApi.md#reverseGeoCodeAddress) | **POST** /address/reverse-geo-code | Reverse Geo Code an address
[**setAddress**](AddressApi.md#setAddress) | **POST** /address/set | Add a new Address
[**suggestAddress**](AddressApi.md#suggestAddress) | **POST** /address/suggest-address | Suggest an address
[**updateAddress**](AddressApi.md#updateAddress) | **PUT** /address/{addressId} | Update a address
[**validateAddress**](AddressApi.md#validateAddress) | **GET** /address/validate | Validate an address


# **deleteAddress**
> \BumbalClient\Model\ApiResponse deleteAddress($address_id)

Delete an address

Delete an address

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

$api_instance = new BumbalClient\Api\AddressApi();
$address_id = 789; // int | ID of the address to delete

try {
    $result = $api_instance->deleteAddress($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->deleteAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| ID of the address to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **geoCodeAddress**
> \BumbalClient\Model\AddressGeoCodeResponse geoCodeAddress($arguments)

GeoCode an address

GeoCode an address.

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

$api_instance = new BumbalClient\Api\AddressApi();
$arguments = new \BumbalClient\Model\AddressGeoCodeArguments(); // \BumbalClient\Model\AddressGeoCodeArguments | Address GeoCode Arguments

try {
    $result = $api_instance->geoCodeAddress($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->geoCodeAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AddressGeoCodeArguments**](../Model/AddressGeoCodeArguments.md)| Address GeoCode Arguments |

### Return type

[**\BumbalClient\Model\AddressGeoCodeResponse**](../Model/AddressGeoCodeResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAddress**
> \BumbalClient\Model\AddressModel retrieveAddress($address_id)

Retrieve a Address

Retrieve an Address

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

$api_instance = new BumbalClient\Api\AddressApi();
$address_id = 789; // int | ID of address to retrieve

try {
    $result = $api_instance->retrieveAddress($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->retrieveAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| ID of address to retrieve |

### Return type

[**\BumbalClient\Model\AddressModel**](../Model/AddressModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListAddress**
> \BumbalClient\Model\AddressListResponse retrieveListAddress($arguments)

Retrieve List of Addresses

Retrieve List of Addresses

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

$api_instance = new BumbalClient\Api\AddressApi();
$arguments = new \BumbalClient\Model\AddressRetrieveListArguments(); // \BumbalClient\Model\AddressRetrieveListArguments | Address RetrieveList Arguments

try {
    $result = $api_instance->retrieveListAddress($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->retrieveListAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AddressRetrieveListArguments**](../Model/AddressRetrieveListArguments.md)| Address RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\AddressListResponse**](../Model/AddressListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reverseGeoCodeAddress**
> \BumbalClient\Model\AddressReverseGeoCodeResponse reverseGeoCodeAddress($arguments)

Reverse Geo Code an address

Reverse Geo Code an address

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

$api_instance = new BumbalClient\Api\AddressApi();
$arguments = new \BumbalClient\Model\AddressReverseGeoCodeArguments(); // \BumbalClient\Model\AddressReverseGeoCodeArguments | Address Reverse GeoCode Arguments

try {
    $result = $api_instance->reverseGeoCodeAddress($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->reverseGeoCodeAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AddressReverseGeoCodeArguments**](../Model/AddressReverseGeoCodeArguments.md)| Address Reverse GeoCode Arguments |

### Return type

[**\BumbalClient\Model\AddressReverseGeoCodeResponse**](../Model/AddressReverseGeoCodeResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAddress**
> \BumbalClient\Model\ApiResponse setAddress($body)

Add a new Address

Add a new Address

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

$api_instance = new BumbalClient\Api\AddressApi();
$body = new \BumbalClient\Model\AddressModel(); // \BumbalClient\Model\AddressModel | Address object that needs to be created

try {
    $result = $api_instance->setAddress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->setAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\AddressModel**](../Model/AddressModel.md)| Address object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suggestAddress**
> \BumbalClient\Model\AddressSuggestionResponse suggestAddress($arguments)

Suggest an address

Suggest an address based on ISO country code, zipcode and house_nr. For now, this will only work properly for Dutch addresses.

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

$api_instance = new BumbalClient\Api\AddressApi();
$arguments = new \BumbalClient\Model\AddressSuggestionArguments(); // \BumbalClient\Model\AddressSuggestionArguments | Address Suggestion Arguments

try {
    $result = $api_instance->suggestAddress($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->suggestAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AddressSuggestionArguments**](../Model/AddressSuggestionArguments.md)| Address Suggestion Arguments |

### Return type

[**\BumbalClient\Model\AddressSuggestionResponse**](../Model/AddressSuggestionResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddress**
> \BumbalClient\Model\ApiResponse updateAddress($address_id, $body)

Update a address

Update a address

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

$api_instance = new BumbalClient\Api\AddressApi();
$address_id = 789; // int | ID of address to update
$body = new \BumbalClient\Model\AddressModel(); // \BumbalClient\Model\AddressModel | Address object that needs to be updated

try {
    $result = $api_instance->updateAddress($address_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->updateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| ID of address to update |
 **body** | [**\BumbalClient\Model\AddressModel**](../Model/AddressModel.md)| Address object that needs to be updated | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateAddress**
> \BumbalClient\Model\AddressValidationResponse validateAddress($city, $iso_country, $street, $house_nr, $house_nr_addendum, $zipcode, $minimum_certainty)

Validate an address

Validate an address

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

$api_instance = new BumbalClient\Api\AddressApi();
$city = "city_example"; // string | City
$iso_country = "iso_country_example"; // string | Country in ISO 3166-1 alpha 2
$street = "street_example"; // string | Street
$house_nr = "house_nr_example"; // string | House Number
$house_nr_addendum = "house_nr_addendum_example"; // string | House Number Annex
$zipcode = "zipcode_example"; // string | Zipcode
$minimum_certainty = 56; // int | Minimum required certainty as an int between 0 and 100

try {
    $result = $api_instance->validateAddress($city, $iso_country, $street, $house_nr, $house_nr_addendum, $zipcode, $minimum_certainty);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->validateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **city** | **string**| City |
 **iso_country** | **string**| Country in ISO 3166-1 alpha 2 |
 **street** | **string**| Street | [optional]
 **house_nr** | **string**| House Number | [optional]
 **house_nr_addendum** | **string**| House Number Annex | [optional]
 **zipcode** | **string**| Zipcode | [optional]
 **minimum_certainty** | **int**| Minimum required certainty as an int between 0 and 100 | [optional]

### Return type

[**\BumbalClient\Model\AddressValidationResponse**](../Model/AddressValidationResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

