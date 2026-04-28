# ReportDeliveryScheduleModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**report_delivery_id** | **int** | The id of the report delivery this schedule is associated with | [optional] 
**rule** | **string** | A schedule described as an RRule as defined by RFC 5545. If a DTSTART component is not included, DTSTART will be set to NOW. | [optional] 
**recipients** | **string** | A comma separated list of recipient email addresses to send the reports to | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 
**deleted_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


