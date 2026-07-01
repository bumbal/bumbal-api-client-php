# BumbalClient\ReportApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDeliveryReport**](ReportApi.md#createDeliveryReport) | **POST** /report-delivery/set | Set up the auto delivery of a report by a report ID
[**createDeliveryReportSchedule**](ReportApi.md#createDeliveryReportSchedule) | **POST** /report-delivery-schedule/set | Set up the auto delivery of a report by a report ID
[**deleteDeliveryReport**](ReportApi.md#deleteDeliveryReport) | **DELETE** /report-delivery/{reportDeliveryId} | Delete a report auto delivery
[**deleteDeliveryReportSchedule**](ReportApi.md#deleteDeliveryReportSchedule) | **DELETE** /report-delivery-schedule/{reportDeliveryScheduleId} | Delete a report auto delivery schedule
[**exportFileReport**](ReportApi.md#exportFileReport) | **POST** /report/export-file | Export report by id
[**exportReport**](ReportApi.md#exportReport) | **POST** /report/export | Export report by id
[**mapReport**](ReportApi.md#mapReport) | **GET** /report/map/{reportId} | Map report by ID
[**queryReport**](ReportApi.md#queryReport) | **POST** /report/query | Query the report data
[**reportExport**](ReportApi.md#reportExport) | **GET** /report/export/{reportId} | Get the data for exporting a report as the provided file type
[**retrieveDeliveryReport**](ReportApi.md#retrieveDeliveryReport) | **GET** /report-delivery/{reportDeliveryId} | Retrieve a report auto delivery
[**retrieveDeliveryReportSchedule**](ReportApi.md#retrieveDeliveryReportSchedule) | **GET** /report-delivery-schedule/{reportDeliveryScheduleId} | Retrieve a report auto delivery schedule
[**retrieveListDeliveryReport**](ReportApi.md#retrieveListDeliveryReport) | **PUT** /report-delivery | Retrieve a list of report auto deliveries
[**retrieveListDeliveryReportSchedule**](ReportApi.md#retrieveListDeliveryReportSchedule) | **PUT** /report-delivery-schedule | Retrieve a list of report auto deliveries
[**retrieveListReport**](ReportApi.md#retrieveListReport) | **PUT** /report | Retrieve List of reports
[**retrieveListReportParam**](ReportApi.md#retrieveListReportParam) | **GET** /report/{reportId}/param/{paramId} | Retrieve List of values belonging to the parameter
[**retrieveReport**](ReportApi.md#retrieveReport) | **GET** /report/{reportId} | Find report by ID
[**retrieveReportHistory**](ReportApi.md#retrieveReportHistory) | **PUT** /report/history | Find all the stored reports for a given report
[**retrieveReportHistoryFile**](ReportApi.md#retrieveReportHistoryFile) | **GET** /report/history-file/{reportId} | Retrieve a report file


# **createDeliveryReport**
> \BumbalClient\Model\ReportModel createDeliveryReport($body)

Set up the auto delivery of a report by a report ID

Set up the auto delivery of a report by a report ID

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

$api_instance = new BumbalClient\Api\ReportApi();
$body = new \BumbalClient\Model\ReportDeliveryModel(); // \BumbalClient\Model\ReportDeliveryModel | Report delivery object that needs to be created

try {
    $result = $api_instance->createDeliveryReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->createDeliveryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ReportDeliveryModel**](../Model/ReportDeliveryModel.md)| Report delivery object that needs to be created |

### Return type

[**\BumbalClient\Model\ReportModel**](../Model/ReportModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDeliveryReportSchedule**
> \BumbalClient\Model\ReportModel createDeliveryReportSchedule($body)

Set up the auto delivery of a report by a report ID

Set up the auto delivery of a report by a report ID

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

$api_instance = new BumbalClient\Api\ReportApi();
$body = new \BumbalClient\Model\ReportDeliveryModel(); // \BumbalClient\Model\ReportDeliveryModel | Report delivery object that needs to be created

try {
    $result = $api_instance->createDeliveryReportSchedule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->createDeliveryReportSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ReportDeliveryModel**](../Model/ReportDeliveryModel.md)| Report delivery object that needs to be created |

### Return type

[**\BumbalClient\Model\ReportModel**](../Model/ReportModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeliveryReport**
> \BumbalClient\Model\ApiResponse deleteDeliveryReport($report_delivery_id)

Delete a report auto delivery

Delete a report auto delivery

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

$api_instance = new BumbalClient\Api\ReportApi();
$report_delivery_id = 789; // int | ID of report delivery to delete

try {
    $result = $api_instance->deleteDeliveryReport($report_delivery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->deleteDeliveryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_delivery_id** | **int**| ID of report delivery to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDeliveryReportSchedule**
> \BumbalClient\Model\ApiResponse deleteDeliveryReportSchedule($report_delivery_schedule_id)

Delete a report auto delivery schedule

SDelete a report auto delivery schedule

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

$api_instance = new BumbalClient\Api\ReportApi();
$report_delivery_schedule_id = 789; // int | ID of report delivery schedule to delete

try {
    $result = $api_instance->deleteDeliveryReportSchedule($report_delivery_schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->deleteDeliveryReportSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_delivery_schedule_id** | **int**| ID of report delivery schedule to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportFileReport**
> \SplFileObject exportFileReport($arguments)

Export report by id

Returns the data of the report for exporting

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

$api_instance = new BumbalClient\Api\ReportApi();
$arguments = new \BumbalClient\Model\ReportExportArguments(); // \BumbalClient\Model\ReportExportArguments | Export Report Arguments

try {
    $result = $api_instance->exportFileReport($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->exportFileReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ReportExportArguments**](../Model/ReportExportArguments.md)| Export Report Arguments |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportReport**
> \BumbalClient\Model\ReportExportResponse exportReport($arguments)

Export report by id

Returns the data of the report for exporting

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

$api_instance = new BumbalClient\Api\ReportApi();
$arguments = new \BumbalClient\Model\ReportExportArguments(); // \BumbalClient\Model\ReportExportArguments | Export Report Arguments

try {
    $result = $api_instance->exportReport($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->exportReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ReportExportArguments**](../Model/ReportExportArguments.md)| Export Report Arguments |

### Return type

[**\BumbalClient\Model\ReportExportResponse**](../Model/ReportExportResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mapReport**
> \BumbalClient\Model\ReportMapResponse mapReport($report_id, $map_column, $map_filter, $mapped_report_id, $filters)

Map report by ID

Map values of a report to a filter of another report

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

$api_instance = new BumbalClient\Api\ReportApi();
$report_id = 789; // int | ID of report to get values from
$map_column = "map_column_example"; // string | Column of the report to get values from
$map_filter = "map_filter_example"; // string | Name of filter of the report to pass values to
$mapped_report_id = 789; // int | Id of report that is receiving the mapped values
$filters = "filters_example"; // string | Filters to be used on when retrieving the values

try {
    $result = $api_instance->mapReport($report_id, $map_column, $map_filter, $mapped_report_id, $filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->mapReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| ID of report to get values from |
 **map_column** | **string**| Column of the report to get values from |
 **map_filter** | **string**| Name of filter of the report to pass values to |
 **mapped_report_id** | **int**| Id of report that is receiving the mapped values |
 **filters** | **string**| Filters to be used on when retrieving the values |

### Return type

[**\BumbalClient\Model\ReportMapResponse**](../Model/ReportMapResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queryReport**
> \BumbalClient\Model\ReportQueryResponse queryReport($arguments)

Query the report data

Retrieve the report data

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

$api_instance = new BumbalClient\Api\ReportApi();
$arguments = new \BumbalClient\Model\ReportQueryArguments(); // \BumbalClient\Model\ReportQueryArguments | Query Report Arguments

try {
    $result = $api_instance->queryReport($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->queryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ReportQueryArguments**](../Model/ReportQueryArguments.md)| Query Report Arguments |

### Return type

[**\BumbalClient\Model\ReportQueryResponse**](../Model/ReportQueryResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportExport**
> \SplFileObject reportExport($report_id, $export_type, $return_history, $filters, $parent_report_id, $parent_filters)

Get the data for exporting a report as the provided file type

Returns a report file

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

$api_instance = new BumbalClient\Api\ReportApi();
$report_id = 789; // int | ID of report to export
$export_type = "export_type_example"; // string | Type of the export
$return_history = "return_history_example"; // string | Whether to return the history of the report or the file
$filters = "filters_example"; // string | Filters to be used on the report before exporting
$parent_report_id = 789; // int | ID of the parent report
$parent_filters = "parent_filters_example"; // string | Filters to be used on the parent report before exporting

try {
    $result = $api_instance->reportExport($report_id, $export_type, $return_history, $filters, $parent_report_id, $parent_filters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| ID of report to export |
 **export_type** | **string**| Type of the export |
 **return_history** | **string**| Whether to return the history of the report or the file |
 **filters** | **string**| Filters to be used on the report before exporting | [optional]
 **parent_report_id** | **int**| ID of the parent report | [optional]
 **parent_filters** | **string**| Filters to be used on the parent report before exporting | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/pdf, application/csv, application/xlsx, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveDeliveryReport**
> \BumbalClient\Model\ReportDeliveryModel retrieveDeliveryReport($report_delivery_id)

Retrieve a report auto delivery

Retrieve a report auto delivery

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

$api_instance = new BumbalClient\Api\ReportApi();
$report_delivery_id = 789; // int | ID of report delivery to return

try {
    $result = $api_instance->retrieveDeliveryReport($report_delivery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->retrieveDeliveryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_delivery_id** | **int**| ID of report delivery to return |

### Return type

[**\BumbalClient\Model\ReportDeliveryModel**](../Model/ReportDeliveryModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveDeliveryReportSchedule**
> \BumbalClient\Model\ReportDeliveryScheduleModel retrieveDeliveryReportSchedule($report_delivery_schedule_id)

Retrieve a report auto delivery schedule

Retrieve a report auto delivery schedule

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

$api_instance = new BumbalClient\Api\ReportApi();
$report_delivery_schedule_id = 789; // int | ID of report delivery schedule to return

try {
    $result = $api_instance->retrieveDeliveryReportSchedule($report_delivery_schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->retrieveDeliveryReportSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_delivery_schedule_id** | **int**| ID of report delivery schedule to return |

### Return type

[**\BumbalClient\Model\ReportDeliveryScheduleModel**](../Model/ReportDeliveryScheduleModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListDeliveryReport**
> \BumbalClient\Model\ReportDeliveryListResponse retrieveListDeliveryReport($arguments)

Retrieve a list of report auto deliveries

Retrieve a list of report auto deliveries

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

$api_instance = new BumbalClient\Api\ReportApi();
$arguments = new \BumbalClient\Model\ReportDeliveryRetrieveListArguments(); // \BumbalClient\Model\ReportDeliveryRetrieveListArguments | Report delivery RetrieveList Arguments

try {
    $result = $api_instance->retrieveListDeliveryReport($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->retrieveListDeliveryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ReportDeliveryRetrieveListArguments**](../Model/ReportDeliveryRetrieveListArguments.md)| Report delivery RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ReportDeliveryListResponse**](../Model/ReportDeliveryListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListDeliveryReportSchedule**
> \BumbalClient\Model\ReportDeliveryListResponse retrieveListDeliveryReportSchedule($arguments)

Retrieve a list of report auto deliveries

Retrieve a list of report auto deliveries

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

$api_instance = new BumbalClient\Api\ReportApi();
$arguments = new \BumbalClient\Model\ReportDeliveryRetrieveListArguments(); // \BumbalClient\Model\ReportDeliveryRetrieveListArguments | Report delivery RetrieveList Arguments

try {
    $result = $api_instance->retrieveListDeliveryReportSchedule($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->retrieveListDeliveryReportSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ReportDeliveryRetrieveListArguments**](../Model/ReportDeliveryRetrieveListArguments.md)| Report delivery RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ReportDeliveryListResponse**](../Model/ReportDeliveryListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListReport**
> \BumbalClient\Model\ReportListResponse retrieveListReport($arguments)

Retrieve List of reports

Retrieve List of reports

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

$api_instance = new BumbalClient\Api\ReportApi();
$arguments = new \BumbalClient\Model\ReportRetrieveListArguments(); // \BumbalClient\Model\ReportRetrieveListArguments | Report RetrieveList Arguments

try {
    $result = $api_instance->retrieveListReport($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->retrieveListReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ReportRetrieveListArguments**](../Model/ReportRetrieveListArguments.md)| Report RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ReportListResponse**](../Model/ReportListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListReportParam**
> \BumbalClient\Model\ReportParamListResponse retrieveListReportParam($report_id, $param_id, $search_text, $sorting_column, $sorting_direction, $offset, $limit)

Retrieve List of values belonging to the parameter

Retrieve List of values belonging to the report parameter

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

$api_instance = new BumbalClient\Api\ReportApi();
$report_id = 789; // int | ID of the report
$param_id = "param_id_example"; // string | ID of the parameter
$search_text = "search_text_example"; // string | Text to search in the parameter values
$sorting_column = "sorting_column_example"; // string | Column to sort the parameter values by
$sorting_direction = "sorting_direction_example"; // string | Direction to sort the parameter values (asc or desc)
$offset = 56; // int | Offset for pagination
$limit = 56; // int | Limit for pagination

try {
    $result = $api_instance->retrieveListReportParam($report_id, $param_id, $search_text, $sorting_column, $sorting_direction, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->retrieveListReportParam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| ID of the report |
 **param_id** | **string**| ID of the parameter |
 **search_text** | **string**| Text to search in the parameter values | [optional]
 **sorting_column** | **string**| Column to sort the parameter values by | [optional]
 **sorting_direction** | **string**| Direction to sort the parameter values (asc or desc) | [optional]
 **offset** | **int**| Offset for pagination | [optional]
 **limit** | **int**| Limit for pagination | [optional]

### Return type

[**\BumbalClient\Model\ReportParamListResponse**](../Model/ReportParamListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveReport**
> \BumbalClient\Model\ReportModel retrieveReport($report_id)

Find report by ID

Returns a single report

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

$api_instance = new BumbalClient\Api\ReportApi();
$report_id = 789; // int | ID of report to return

try {
    $result = $api_instance->retrieveReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->retrieveReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| ID of report to return |

### Return type

[**\BumbalClient\Model\ReportModel**](../Model/ReportModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveReportHistory**
> \BumbalClient\Model\ReportHistoryModel retrieveReportHistory($arguments)

Find all the stored reports for a given report

Returns a a list of all the reports which have been stored

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

$api_instance = new BumbalClient\Api\ReportApi();
$arguments = new \BumbalClient\Model\ReportHistoryRetrieveListArguments(); // \BumbalClient\Model\ReportHistoryRetrieveListArguments | Report History RetrieveList Arguments

try {
    $result = $api_instance->retrieveReportHistory($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->retrieveReportHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ReportHistoryRetrieveListArguments**](../Model/ReportHistoryRetrieveListArguments.md)| Report History RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ReportHistoryModel**](../Model/ReportHistoryModel.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/pdf, application/csv, application/xlsx, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveReportHistoryFile**
> \SplFileObject retrieveReportHistoryFile($report_id, $export_type)

Retrieve a report file

Returns a report file

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

$api_instance = new BumbalClient\Api\ReportApi();
$report_id = 789; // int | ID of report to return the history of
$export_type = "export_type_example"; // string | Type of the export

try {
    $result = $api_instance->retrieveReportHistoryFile($report_id, $export_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->retrieveReportHistoryFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **int**| ID of report to return the history of |
 **export_type** | **string**| Type of the export |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key), [jwt](../../README.md#jwt)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/pdf, application/csv, application/xlsx, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

