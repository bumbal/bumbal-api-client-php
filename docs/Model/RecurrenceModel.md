# RecurrenceModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**name** | **string** | Recurrence name | [optional] 
**type_id** | **int** | recurrence type_id, 11:activity, 24:route | [optional] 
**type_name** | **string** | recurrence type_name, activity, route | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Start date | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | End date | [optional] 
**end_option** | **string** | End option | [optional] 
**period_name** | **string** | recurrence period_name, 1:day, 2:week, 3:month | [optional] 
**period_id** | **int** | recurrence period_id, 1:day, 2:week, 3:month | [optional] 
**frequency** | **int** | period frequency of recurrence (2 &#x3D; repeat each 2 days/weeks/months) | [optional] 
**count** | **int** | nr of last recurrence to be created | [optional] 
**show_ahead** | **int** | nr of recurrences to show ahead in system | [optional] 
**current** | **int** | last created recurrence nr | [optional] 
**summary** | **string** | summary of recurrence | [optional] 
**next_run** | [**\DateTime**](\DateTime.md) | Next date on which a new recurrence will be added | [optional] 
**last_run** | [**\DateTime**](\DateTime.md) | Last date on which a new recurrence was added | [optional] 
**active** | **bool** | if active&#x3D;0: recurrence has been removed and is no longer visible in any bumbal interface | [optional] 
**has_uncreated_objects** | **bool** | If the recurrence has uncreated objects | [optional] 
**meta_data** | [**\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**base** | **string** | Recurrence base | [optional] 
**base_date** | **string** | Recurrence base date | [optional] 
**monday** | **bool** | Monday | [optional] 
**tuesday** | **bool** | Tuesday | [optional] 
**wednesday** | **bool** | Wednesday | [optional] 
**thursday** | **bool** | Thursday | [optional] 
**friday** | **bool** | Friday | [optional] 
**saturday** | **bool** | Saturday | [optional] 
**sunday** | **bool** | Sunday | [optional] 
**month_day** | **bool** | month day | [optional] 
**monthly_option** | **string** | Recurrence occurs every beginning or ending of the month | [optional] 
**object_id** | **int** | ID of the object | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


