# TransactionModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**active** | **bool** | if active&#x3D;0: Transaction has been removed and is no longer visible in any bumbal interface | [optional] 
**activity_id** | **int** | activity id it belongs to | [optional] 
**amount** | **int** | amount in cents, 42 euro is 4200 cents | [optional] 
**transaction_type** | **int** | Type of Transaction: 1 &#x3D; cash, 2 &#x3D; pin, 3 &#x3D; online | [optional] 
**paid** | **bool** | If paid &#x3D; 0: the transaction has not been fullfilled yet | [optional] 
**failed** | **bool** | if failed &#x3D; 1: the transaction has failed | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


