# ReportExportArguments

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Report ID | [optional] 
**parameters** | [**\BumbalClient\Model\ReportParamModel[]**](ReportParamModel.md) |  | [optional] 
**parent_parameters** | [**\BumbalClient\Model\ReportParamModel[]**](ReportParamModel.md) |  | [optional] 
**export_type** | **string** | Export Type | [optional] 
**sorting_column** | **string** | Sorting Column | [optional] 
**sorting_direction** | **string** | Sorting Direction | [optional] 
**fresh_report** | **bool** | Force fresh data, bypass cache | [optional] 
**row_limit** | **int** | Maximum rows the generated file may contain. Defaults to 100; raise it for a report that has more. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


