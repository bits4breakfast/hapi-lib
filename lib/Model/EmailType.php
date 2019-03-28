<?php
/**
 * EmailType
 *
 * PHP version 5
 *
 * @category Class
 * @package  HapiPush
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
* HAPI Data Model
 *
* HAPI External Data Model
 *
* OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.4
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace HapiPush\Model;
use \HapiPush\ObjectSerializer;

/**
 * EmailType Class Doc Comment
 *
 * @category Class
 * @package  HapiPush
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailType
{
    /**
     * Possible values of this enum
     */
    const _PRIVATE = 'PRIVATE';
const CORPORATE = 'CORPORATE';
const OTHER = 'OTHER';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_PRIVATE,
self::CORPORATE,
self::OTHER,        ];
    }
}
