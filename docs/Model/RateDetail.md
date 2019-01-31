# RateDetail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dates** | [**\Hapi\Model\TimeSpan**](TimeSpan.md) |  | [optional] 
**rate_code** | **string** | detail rate code | [optional] 
**market_code** | **string** | rate marketing code | [optional] 
**source_code** | **string** | rate source code | [optional] 
**packages** | **string** | packages included in rate | [optional] 
**room_types** | **string[]** | valid room types for rate | [optional] 
**days_of_week** | **string[]** | Days of the week for which the rate is valid | [optional] 
**rates** | [**\Hapi\Model\Rate[]**](Rate.md) | Rate amounts by number of guests and guest type | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

