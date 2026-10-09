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
**monday** | [**\BumbalClient\Model\ServiceWindowDayModel**](ServiceWindowDayModel.md) | ServiceWindowDayModel containing the cut off information | [optional] 
**tuesday** | [**\BumbalClient\Model\ServiceWindowDayModel**](ServiceWindowDayModel.md) | ServiceWindowDayModel containing the cut off information | [optional] 
**wednesday** | [**\BumbalClient\Model\ServiceWindowDayModel**](ServiceWindowDayModel.md) | ServiceWindowDayModel containing the cut off information | [optional] 
**thursday** | [**\BumbalClient\Model\ServiceWindowDayModel**](ServiceWindowDayModel.md) | ServiceWindowDayModel containing the cut off information | [optional] 
**friday** | [**\BumbalClient\Model\ServiceWindowDayModel**](ServiceWindowDayModel.md) | ServiceWindowDayModel containing the cut off information | [optional] 
**saturday** | [**\BumbalClient\Model\ServiceWindowDayModel**](ServiceWindowDayModel.md) | ServiceWindowDayModel containing the cut off information | [optional] 
**sunday** | [**\BumbalClient\Model\ServiceWindowDayModel**](ServiceWindowDayModel.md) | ServiceWindowDayModel containing the cut off information | [optional] 
**min_days_ahead** | **int** | Number of min. days ahead | [optional] 
**max_days_ahead** | **int** | Number of max. days ahead | [optional] 
**service_windows** | [**\BumbalClient\Model\ServiceWindowModel[]**](ServiceWindowModel.md) |  | [optional] 
**deferred_service_windows_scheme_days** | **int** | Deferred service windows scheme days (when null, will take the value from settings) | [optional] 
**max_distance_impact_in_target_region** | **float** | Maximum distance impact (meters) in target region (when null, will take the value from settings) | [optional] 
**travel_time_multiplication_factor** | **float** | Travel time multiplication factor (when null, will take the value from settings) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


