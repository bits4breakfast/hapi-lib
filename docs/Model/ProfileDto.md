# ProfileDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_guid** | **string** |  | [optional] 
**profile_id** | **string** |  | [optional] 
**profile_type** | [**\Hapi\Model\ProfileType**](ProfileType.md) |  | [optional] 
**hotel** | [**\Hapi\Model\HotelDto**](HotelDto.md) |  | [optional] 
**name** | [**\Hapi\Model\ProfileNameDto**](ProfileNameDto.md) |  | [optional] 
**date_of_birth** | [**\DateTime**](\DateTime.md) |  | [optional] 
**emails** | [**\Hapi\Model\ProfileEmailDto[]**](ProfileEmailDto.md) |  | [optional] 
**phones** | [**\Hapi\Model\ProfilePhoneNumberDto[]**](ProfilePhoneNumberDto.md) |  | [optional] 
**loyalty_programs** | [**\Hapi\Model\LoyaltyProgramDto[]**](LoyaltyProgramDto.md) |  | [optional] 
**addresses** | [**\Hapi\Model\ProfileAddressDto[]**](ProfileAddressDto.md) |  | [optional] 
**repository_record_created** | [**\DateTime**](\DateTime.md) | Record create date in repository, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**repository_record_updated** | [**\DateTime**](\DateTime.md) | Record update date in repository, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**travel_agent_id** | **string** | Travel Agent IATA number | [optional] 
**commission_plan_code** | **string** | Commission plan for Travel Agent | [optional] 
**creator** | **string** | User or interface who created the profile | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | Date and Time the profile was created | [optional] 
**primary_language** | **string** | Primary language of individual | [optional] 
**occupation** | **string** | Job title, occupation of guest | [optional] 
**id_documents** | [**\Hapi\Model\IdDocumentDto[]**](IdDocumentDto.md) |  | [optional] 
**contact** | **string** | Contact info (non-guest profile) | [optional] 
**ar_number** | **string** | Accounts receivable number (non-guest profile) | [optional] 
**allowed_to_contact_via_email** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

