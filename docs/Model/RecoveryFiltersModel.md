# RecoveryFiltersModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**updated_at_since** | [**\DateTime**](\DateTime.md) | Show updated since | [optional] 
**updated_at_till** | [**\DateTime**](\DateTime.md) | Show updated till | [optional] 
**id** | **int[]** | Bumbal package line id&#39;s | [optional] 
**nr** | **string[]** | Recovery numbers | [optional] 
**active** | **int[]** | Active status of Recovery, 0 values represent deleted Recoveries | [optional] 
**nr_of_packages** | **float** | Number of packages in recovery line | [optional] 
**package_type_name** | **string[]** | Type of the Packages | [optional] 
**package_type_id** | **int[]** | ID of the package type for the packages | [optional] 
**capacities** | [**\BumbalClient\Model\CapacityModel[]**](CapacityModel.md) |  | [optional] 
**barcode** | **string[]** | barcode for recoveries/returns | [optional] 
**description** | **string** | description of this package_line | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**activity_id** | **int[]** | Activity id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


