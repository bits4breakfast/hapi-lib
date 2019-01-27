# RepositorySearchRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **int** | Offset from the begging of retrieved values. If no offset value has provided then default (0) will be used | [optional] 
**limit** | **int** | Limit of how much values will be retrieved. If no limit value has provided then default (100) will be used | [optional] 
**from_date** | [**\DateTime**](\DateTime.md) | Filter date value since which reservations will be retrieved (included), in YYYY-MM-DDThh:mm:ss.sssZ format. Filter value in repository is latest update time. | 
**to_date** | [**\DateTime**](\DateTime.md) | Filter date value to which reservations will be retrieved (included), in YYYY-MM-DDThh:mm:ss.sssZ format. Filter value in repository is latest update time. | [optional] 
**chain_code** | **string** | HAPI internal representation of hotel chain. Together with propertyCode compose to unique hotel identifier. | [optional] 
**property_code** | **string** | HAPI internal representation of hotel property. Together with chainCode compose to unique hotel identifier. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

