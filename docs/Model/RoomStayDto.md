# RoomStayDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**room_type** | **string** | Code designating the specific room requested | [optional] 
**room_number** | **string** | Room number | [optional] 
**rate_code** | **string** |  | [optional] 
**market** | [**\Hapi\Model\MarketDto**](MarketDto.md) |  | [optional] 
**room_count** | **int** |  | [optional] 
**source_code** | **string** | Source code for the source of the rate used in the reservation | [optional] 
**allotment_code** | **string** | Code of allotment if stay is a part of allotment message | [optional] 
**payment_method** | **string** | Payment Method used in the reservation | [optional] 
**comp_yn** | **string** | compYN used in the reservation | [optional] 
**pms_guest_id** | **string** | pmsGuestId used in the reservation | [optional] 
**actual_arrival_date** | [**\DateTime**](\DateTime.md) | Actual Arrival Date for the reservation | [optional] 
**actual_departure_date** | [**\DateTime**](\DateTime.md) | Actual Departure Date for the reservation | [optional] 
**daily_rates** | [**\Hapi\Model\DailyRateDto[]**](DailyRateDto.md) |  | [optional] 
**room_rates** | [**\Hapi\Model\RoomRateDto[]**](RoomRateDto.md) |  | [optional] 
**stay_revenues** | [**\Hapi\Model\StayRevenueDto[]**](StayRevenueDto.md) |  | [optional] 
**daily_revenues** | [**\Hapi\Model\DailyRevenueDto[]**](DailyRevenueDto.md) |  | [optional] 
**complimentary_code** | **string** |  | [optional] 
**confidential_rate** | **bool** |  | [optional] 
**guarantee_info** | [**\Hapi\Model\GuaranteeInfoDto**](GuaranteeInfoDto.md) |  | [optional] 
**channel_code** | **string** |  | [optional] 
**reservation_status** | **string** |  | [optional] 
**inventory_block_code** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

