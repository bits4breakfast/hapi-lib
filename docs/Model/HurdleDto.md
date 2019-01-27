# HurdleDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hotel** | [**\Hapi\Model\HotelDto**](HotelDto.md) |  | [optional] 
**dates** | [**\Hapi\Model\TimeSpanDto**](TimeSpanDto.md) |  | [optional] 
**yield_category** | **string** | represents the yield management category | [optional] 
**hurdle_amount** | [**BigDecimal**](BigDecimal.md) | Base rate amount for hurdle | [optional] 
**delta_amount** | [**BigDecimal**](BigDecimal.md) | monetary value added to the hurdle rate for each additional room sold up to the ceiling | [optional] 
**currency_code** | **string** | currency code indicating in which currency the rate amounts are displayed | [optional] 
**ceiling** | **int** | number of rooms to be sold to which the delta value should be added | [optional] 
**sell_limit** | **int** | maximum number of rooms to be sold in the room types linked to the yield category | [optional] 
**rooms_sold** | **int** | number of rooms sold in the room types linked to the YIELD CATEGORY since the last update | [optional] 
**length_of_stay** | **int** | length of stay for this hurdle rate | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

