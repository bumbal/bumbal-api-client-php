# CheckAvailabilityTimeWindowResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier for the time window | [optional] 
**key** | **string** | Unique key for the time window | [optional] 
**date_time_from** | [**\DateTime**](\DateTime.md) | Start date and time of the time window | [optional] 
**date_time_to** | [**\DateTime**](\DateTime.md) | End date and time of the time window | [optional] 
**proposed_plan_date_time_from** | [**\DateTime**](\DateTime.md) | Proposed start date and time for the plan | [optional] 
**proposed_plan_date_time_to** | [**\DateTime**](\DateTime.md) | Proposed end date and time for the plan | [optional] 
**proposed_driver** | [**\BumbalClient\Model\CheckAvailabilityTimeWindowResultProposedDriver**](CheckAvailabilityTimeWindowResultProposedDriver.md) |  | [optional] 
**impact** | [**\BumbalClient\Model\CheckAvailabilityTimeWindowResultImpact[]**](CheckAvailabilityTimeWindowResultImpact.md) | Class PlannerController | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


