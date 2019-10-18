<?php
/**
 * Profile
 *
 * PHP version 5
 *
 * @category Class
 * @package  HapiPush
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Streaming Flow Webservice
 *
 * - sample API definition for a vendor webservice that receives data from a Hapi Streaming Flow - definition provided as an example only
 *
 * The version of the OpenAPI document: 1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HapiPush\Model;

use \ArrayAccess;
use \HapiPush\ObjectSerializer;

/**
 * Profile Class Doc Comment
 *
 * @category Class
 * @package  HapiPush
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Profile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Profile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'property_id' => '\HapiPush\Model\PropertyId',
        'id' => 'string',
        'type' => 'string',
        'name' => '\HapiPush\Model\Name',
        'company' => 'string',
        'date_of_birth' => 'string',
        'emails' => '\HapiPush\Model\Email[]',
        'phones' => '\HapiPush\Model\Phone[]',
        'addresses' => '\HapiPush\Model\Address[]',
        'id_documents' => '\HapiPush\Model\IdDocument[]',
        'loyalty_programs' => '\HapiPush\Model\LoyaltyProgram[]',
        'creator' => 'string',
        'created_date' => 'string',
        'travel_agent_id' => 'string',
        'preferences' => '\HapiPush\Model\SpecialRequest[]',
        'comments' => '\HapiPush\Model\Comment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'property_id' => null,
        'id' => null,
        'type' => null,
        'name' => null,
        'company' => null,
        'date_of_birth' => null,
        'emails' => null,
        'phones' => null,
        'addresses' => null,
        'id_documents' => null,
        'loyalty_programs' => null,
        'creator' => null,
        'created_date' => null,
        'travel_agent_id' => null,
        'preferences' => null,
        'comments' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'property_id' => 'propertyId',
        'id' => 'id',
        'type' => 'type',
        'name' => 'name',
        'company' => 'company',
        'date_of_birth' => 'dateOfBirth',
        'emails' => 'emails',
        'phones' => 'phones',
        'addresses' => 'addresses',
        'id_documents' => 'idDocuments',
        'loyalty_programs' => 'loyaltyPrograms',
        'creator' => 'creator',
        'created_date' => 'createdDate',
        'travel_agent_id' => 'travelAgentId',
        'preferences' => 'preferences',
        'comments' => 'comments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_id' => 'setPropertyId',
        'id' => 'setId',
        'type' => 'setType',
        'name' => 'setName',
        'company' => 'setCompany',
        'date_of_birth' => 'setDateOfBirth',
        'emails' => 'setEmails',
        'phones' => 'setPhones',
        'addresses' => 'setAddresses',
        'id_documents' => 'setIdDocuments',
        'loyalty_programs' => 'setLoyaltyPrograms',
        'creator' => 'setCreator',
        'created_date' => 'setCreatedDate',
        'travel_agent_id' => 'setTravelAgentId',
        'preferences' => 'setPreferences',
        'comments' => 'setComments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_id' => 'getPropertyId',
        'id' => 'getId',
        'type' => 'getType',
        'name' => 'getName',
        'company' => 'getCompany',
        'date_of_birth' => 'getDateOfBirth',
        'emails' => 'getEmails',
        'phones' => 'getPhones',
        'addresses' => 'getAddresses',
        'id_documents' => 'getIdDocuments',
        'loyalty_programs' => 'getLoyaltyPrograms',
        'creator' => 'getCreator',
        'created_date' => 'getCreatedDate',
        'travel_agent_id' => 'getTravelAgentId',
        'preferences' => 'getPreferences',
        'comments' => 'getComments'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const TYPE_PERSON = 'PERSON';
    const TYPE_COMPANY = 'COMPANY';
    const TYPE_TRAVEL_AGENT = 'TRAVEL_AGENT';
    const TYPE_GROUP_PROFILE = 'GROUP_PROFILE';
    const TYPE_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PERSON,
            self::TYPE_COMPANY,
            self::TYPE_TRAVEL_AGENT,
            self::TYPE_GROUP_PROFILE,
            self::TYPE_OTHER,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['property_id'] = isset($data['property_id']) ? $data['property_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['id_documents'] = isset($data['id_documents']) ? $data['id_documents'] : null;
        $this->container['loyalty_programs'] = isset($data['loyalty_programs']) ? $data['loyalty_programs'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['travel_agent_id'] = isset($data['travel_agent_id']) ? $data['travel_agent_id'] : null;
        $this->container['preferences'] = isset($data['preferences']) ? $data['preferences'] : null;
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets property_id
     *
     * @return \HapiPush\Model\PropertyId|null
     */
    public function getPropertyId()
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param \HapiPush\Model\PropertyId|null $property_id property_id
     *
     * @return $this
     */
    public function setPropertyId($property_id)
    {
        $this->container['property_id'] = $property_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id profile identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type profile type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \HapiPush\Model\Name|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \HapiPush\Model\Name|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company used to provide company name when name field is used for contact info
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param string|null $date_of_birth date of birth info for guest
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \HapiPush\Model\Email[]|null
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \HapiPush\Model\Email[]|null $emails emails associated to profile
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return \HapiPush\Model\Phone[]|null
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param \HapiPush\Model\Phone[]|null $phones phone numbers associated to profile
     *
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \HapiPush\Model\Address[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \HapiPush\Model\Address[]|null $addresses addresses associated to profile
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets id_documents
     *
     * @return \HapiPush\Model\IdDocument[]|null
     */
    public function getIdDocuments()
    {
        return $this->container['id_documents'];
    }

    /**
     * Sets id_documents
     *
     * @param \HapiPush\Model\IdDocument[]|null $id_documents identifying document for profile holder
     *
     * @return $this
     */
    public function setIdDocuments($id_documents)
    {
        $this->container['id_documents'] = $id_documents;

        return $this;
    }

    /**
     * Gets loyalty_programs
     *
     * @return \HapiPush\Model\LoyaltyProgram[]|null
     */
    public function getLoyaltyPrograms()
    {
        return $this->container['loyalty_programs'];
    }

    /**
     * Sets loyalty_programs
     *
     * @param \HapiPush\Model\LoyaltyProgram[]|null $loyalty_programs guest loyalty info
     *
     * @return $this
     */
    public function setLoyaltyPrograms($loyalty_programs)
    {
        $this->container['loyalty_programs'] = $loyalty_programs;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string|null
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string|null $creator user or interface who created the profile
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return string|null
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string|null $created_date read-only date and time the profile was created
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets travel_agent_id
     *
     * @return string|null
     */
    public function getTravelAgentId()
    {
        return $this->container['travel_agent_id'];
    }

    /**
     * Sets travel_agent_id
     *
     * @param string|null $travel_agent_id IATA number
     *
     * @return $this
     */
    public function setTravelAgentId($travel_agent_id)
    {
        $this->container['travel_agent_id'] = $travel_agent_id;

        return $this;
    }

    /**
     * Gets preferences
     *
     * @return \HapiPush\Model\SpecialRequest[]|null
     */
    public function getPreferences()
    {
        return $this->container['preferences'];
    }

    /**
     * Sets preferences
     *
     * @param \HapiPush\Model\SpecialRequest[]|null $preferences profile preferences for guest
     *
     * @return $this
     */
    public function setPreferences($preferences)
    {
        $this->container['preferences'] = $preferences;

        return $this;
    }

    /**
     * Gets comments
     *
     * @return \HapiPush\Model\Comment[]|null
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param \HapiPush\Model\Comment[]|null $comments comments associated to profile
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


