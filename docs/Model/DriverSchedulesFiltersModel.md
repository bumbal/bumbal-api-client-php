# DriverSchedulesFiltersModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Drivers&#39; schedule ID | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Drivers&#39; schedule date, in the format YYYY-MM-DD | [optional] 
**date_range** | [**\DateTime[]**](\DateTime.md) | Drivers&#39; schedule date range, as an array of two dates, in the format YYYY-MM-DD | [optional] 
**driver_id** | **int[]** | IDs of drivers whose schedules are to be fetched | [optional] 
**zone_ids** | **int[]** | IDs of zones whose schedules are to be fetched | [optional] 
**tag_ids** | **int[]** | IDs of tags whose schedules are to be fetched | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


