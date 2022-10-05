# ServiceWindowsSchemeModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID | [optional] 
**name** | **string** | Service windows scheme name | [optional] 
**even_weeks** | **bool** | even weeks | [optional] 
**odd_weeks** | **bool** | odd weeks | [optional] 
**tags** | [**\BumbalClient\Model\TagModel[]**](TagModel.md) |  | [optional] 
**zones** | [**\BumbalClient\Model\ZoneModel[]**](ZoneModel.md) |  | [optional] 
**brands** | [**\BumbalClient\Model\BrandModel[]**](BrandModel.md) |  | [optional] 
**no_tags** | **bool** | No tags boolean value | [optional] 
**no_zones** | **bool** | No zones boolean value | [optional] 
**activity_type_ids** | **int[]** | Activity type ids | [optional] 
**monday** | **object** | ServiceWindowDayModel containing the cut off information | [optional] 
**tuesday** | **object** | ServiceWindowDayModel containing the cut off information | [optional] 
**wednesday** | **object** | ServiceWindowDayModel containing the cut off information | [optional] 
**thursday** | **object** | ServiceWindowDayModel containing the cut off information | [optional] 
**friday** | **object** | ServiceWindowDayModel containing the cut off information | [optional] 
**saturday** | **object** | ServiceWindowDayModel containing the cut off information | [optional] 
**sunday** | **object** | ServiceWindowDayModel containing the cut off information | [optional] 
**min_days_ahead** | **int** | Number of min. days ahead | [optional] 
**max_days_ahead** | **int** | Number of max. days ahead | [optional] 
**service_windows** | [**\BumbalClient\Model\ServiceWindowModel[]**](ServiceWindowModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


