<?php
/**
 * CheckAvailabilityCacheDataModelActivityAddress
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client Api
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: support@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * CheckAvailabilityCacheDataModelActivityAddress Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CheckAvailabilityCacheDataModelActivityAddress implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CheckAvailabilityCacheDataModel_activity_address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'zipcode' => 'string',
        'iso_country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'zipcode' => null,
        'iso_country' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'zipcode' => 'zipcode',
        'iso_country' => 'iso_country'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'zipcode' => 'setZipcode',
        'iso_country' => 'setIsoCountry'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'zipcode' => 'getZipcode',
        'iso_country' => 'getIsoCountry'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['iso_country'] = isset($data['iso_country']) ? $data['iso_country'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['zipcode'] === null) {
            $invalid_properties[] = "'zipcode' can't be null";
        }
        if ($this->container['iso_country'] === null) {
            $invalid_properties[] = "'iso_country' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['zipcode'] === null) {
            return false;
        }
        if ($this->container['iso_country'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets zipcode
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     * @param string $zipcode
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets iso_country
     * @return string
     */
    public function getIsoCountry()
    {
        return $this->container['iso_country'];
    }

    /**
     * Sets iso_country
     * @param string $iso_country
     * @return $this
     */
    public function setIsoCountry($iso_country)
    {
        $this->container['iso_country'] = $iso_country;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


