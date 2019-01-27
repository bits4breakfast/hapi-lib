# RepositoryReservationDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_date** | **string** | Reservation create date in hotel, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**cancelled_date** | **string** | Reservation cancellation date in hotel, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**cancellation_number** | **string** | Cancellation number for reservation. may be supplied externally or returned from pms | [optional] 
**cancellation_comment** | **string** | Cancellation comment why reservation was cancelled | [optional] 
**modified_date** | **string** | Date at which the record was last modified in the PMS, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**children** | **string** |  | [optional] 
**adults** | **string** |  | [optional] 
**room_stays** | [**\Hapi\Model\RoomStayDto[]**](RoomStayDto.md) |  | [optional] 
**is_tax_and_fees_inclusive** | **bool** | Indicates if taxes and fees are included in room rate amount | [optional] 
**reservation_number** | **string** | Unique reservation id within given hotel | [optional] 
**booking_confirmation_id** | **string** | Unique confirmationId within given hotel | [optional] 
**arrival_date** | [**\DateTime**](\DateTime.md) | Check-in date, in YYYY-MM-DD format | [optional] 
**departure_date** | [**\DateTime**](\DateTime.md) | Check-out date, in YYYY-MM-DD format | [optional] 
**hotel** | [**\Hapi\Model\HotelDto**](HotelDto.md) |  | [optional] 
**status** | **string** |  | [optional] 
**comments** | **string[]** |  | [optional] 
**reservation_originator_code** | **string** | User or system that created reservation | [optional] 
**guests** | [**\Hapi\Model\GuestDto[]**](GuestDto.md) |  | [optional] 
**services** | [**\Hapi\Model\ServiceDto[]**](ServiceDto.md) | Services that related to reservation | [optional] 
**repository_record_created** | [**\DateTime**](\DateTime.md) | Record create date in repository, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**repository_record_updated** | [**\DateTime**](\DateTime.md) | Record update date in repository, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

