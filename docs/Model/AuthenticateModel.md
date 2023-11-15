# AuthenticateModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**token** | **string** | your access token. If a JWT was requested, then this token will be a JWT token. Use this token in a header Authorization:Bearer &lt;jwt goes here&gt;. This token currently has an expiration time of 8 hours, but will also be invalidated when signing out | [optional] 
**user** | [**\BumbalClient\Model\UsersModel**](UsersModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


