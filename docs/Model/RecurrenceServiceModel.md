# RecurrenceServiceModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**name** | **string** | Name of the recurrence | [optional] 
**uuid** | **string** | UUID | [optional] 
**type** | **string** | recurrence type, activity, route | [optional] 
**rule** | **string** | recurrence rule | [optional] 
**rule_readable** | **string** | recurrence rule readable | [optional] 
**create_ahead** | **int** | How many days ahead to create recurrences | [optional] 
**has_finished** | **bool** | If the recurrence has finished | [optional] 
**snapshot** | [**\BumbalClient\Model\RecurrenceServiceSnapshot**](RecurrenceServiceSnapshot.md) | The entity that the recurrence is based on | [optional] 
**base** | **string** | Recurrence base | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Date and time of creation | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | Date and time of last update | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


