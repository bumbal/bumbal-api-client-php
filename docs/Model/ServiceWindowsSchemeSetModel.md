# ServiceWindowsSchemeSetModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID | [optional] 
**name** | **string** | Service windows scheme name | [optional] 
**even_weeks** | **bool** | even weeks | [optional] 
**odd_weeks** | **bool** | odd weeks | [optional] 
**tag_ids** | **int[]** | Tag id&#39;s | [optional] 
**zone_ids** | **int[]** | Zone id&#39;s | [optional] 
**brand_ids** | **int[]** | Brand id&#39;s | [optional] 
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

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


