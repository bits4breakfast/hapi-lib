# ProfileDto2

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profile_guid** | **string** |  | [optional] 
**profile_id** | **string** |  | [optional] 
**profile_type** | [**\Hapi\Model\ProfileType2**](ProfileType2.md) |  | [optional] 
**hotel** | [**\Hapi\Model\HotelDto2**](HotelDto2.md) |  | [optional] 
**name** | [**\Hapi\Model\ProfileNameDto2**](ProfileNameDto2.md) |  | [optional] 
**date_of_birth** | [**\DateTime**](\DateTime.md) |  | [optional] 
**emails** | [**\Hapi\Model\ProfileEmailDto2[]**](ProfileEmailDto2.md) |  | [optional] 
**phones** | [**\Hapi\Model\ProfilePhoneNumberDto2[]**](ProfilePhoneNumberDto2.md) |  | [optional] 
**loyalty_programs** | [**\Hapi\Model\LoyaltyProgramDto2[]**](LoyaltyProgramDto2.md) |  | [optional] 
**addresses** | [**\Hapi\Model\ProfileAddressDto2[]**](ProfileAddressDto2.md) |  | [optional] 
**repository_record_created** | [**\DateTime**](\DateTime.md) | Record create date in repository, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**repository_record_updated** | [**\DateTime**](\DateTime.md) | Record update date in repository, in YYYY-MM-DDThh:mm:ss.sss format | [optional] 
**travel_agent_id** | **string** | Travel Agent IATA number | [optional] 
**commission_plan_code** | **string** | Commission plan for Travel Agent | [optional] 
**creator** | **string** | User or interface who created the profile | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | Date and Time the profile was created | [optional] 
**primary_language** | **string** | Primary language of individual | [optional] 
**occupation** | **string** | Job title, occupation of guest | [optional] 
**id_documents** | [**\Hapi\Model\IdDocumentDto2[]**](IdDocumentDto2.md) |  | [optional] 
**contact** | **string** | Contact info (non-guest profile) | [optional] 
**ar_number** | **string** | Accounts receivable number (non-guest profile) | [optional] 
**allowed_to_contact_via_email** | **bool** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

