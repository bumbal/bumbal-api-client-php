<?php
/**
 * UsersOptionsModel
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
 * Contact: info@bumbal.eu
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
 * UsersOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsersOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UsersOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_addresses' => 'bool',
        'include_user_meta_data' => 'bool',
        'include_user_tags' => 'bool',
        'include_party_name' => 'bool',
        'include_pause' => 'bool',
        'include_zones' => 'bool',
        'include_driver_unavailabilities' => 'bool',
        'include_links' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_addresses' => null,
        'include_user_meta_data' => null,
        'include_user_tags' => null,
        'include_party_name' => null,
        'include_pause' => null,
        'include_zones' => null,
        'include_driver_unavailabilities' => null,
        'include_links' => null
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
        'include_addresses' => 'include_addresses',
        'include_user_meta_data' => 'include_user_meta_data',
        'include_user_tags' => 'include_user_tags',
        'include_party_name' => 'include_party_name',
        'include_pause' => 'include_pause',
        'include_zones' => 'include_zones',
        'include_driver_unavailabilities' => 'include_driver_unavailabilities',
        'include_links' => 'include_links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_addresses' => 'setIncludeAddresses',
        'include_user_meta_data' => 'setIncludeUserMetaData',
        'include_user_tags' => 'setIncludeUserTags',
        'include_party_name' => 'setIncludePartyName',
        'include_pause' => 'setIncludePause',
        'include_zones' => 'setIncludeZones',
        'include_driver_unavailabilities' => 'setIncludeDriverUnavailabilities',
        'include_links' => 'setIncludeLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_addresses' => 'getIncludeAddresses',
        'include_user_meta_data' => 'getIncludeUserMetaData',
        'include_user_tags' => 'getIncludeUserTags',
        'include_party_name' => 'getIncludePartyName',
        'include_pause' => 'getIncludePause',
        'include_zones' => 'getIncludeZones',
        'include_driver_unavailabilities' => 'getIncludeDriverUnavailabilities',
        'include_links' => 'getIncludeLinks'
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
    public function __construct(array $data = null)
    {
        $this->container['include_addresses'] = isset($data['include_addresses']) ? $data['include_addresses'] : null;
        $this->container['include_user_meta_data'] = isset($data['include_user_meta_data']) ? $data['include_user_meta_data'] : null;
        $this->container['include_user_tags'] = isset($data['include_user_tags']) ? $data['include_user_tags'] : null;
        $this->container['include_party_name'] = isset($data['include_party_name']) ? $data['include_party_name'] : null;
        $this->container['include_pause'] = isset($data['include_pause']) ? $data['include_pause'] : null;
        $this->container['include_zones'] = isset($data['include_zones']) ? $data['include_zones'] : null;
        $this->container['include_driver_unavailabilities'] = isset($data['include_driver_unavailabilities']) ? $data['include_driver_unavailabilities'] : null;
        $this->container['include_links'] = isset($data['include_links']) ? $data['include_links'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets include_addresses
     * @return bool
     */
    public function getIncludeAddresses()
    {
        return $this->container['include_addresses'];
    }

    /**
     * Sets include_addresses
     * @param bool $include_addresses
     * @return $this
     */
    public function setIncludeAddresses($include_addresses)
    {
        $this->container['include_addresses'] = $include_addresses;

        return $this;
    }

    /**
     * Gets include_user_meta_data
     * @return bool
     */
    public function getIncludeUserMetaData()
    {
        return $this->container['include_user_meta_data'];
    }

    /**
     * Sets include_user_meta_data
     * @param bool $include_user_meta_data
     * @return $this
     */
    public function setIncludeUserMetaData($include_user_meta_data)
    {
        $this->container['include_user_meta_data'] = $include_user_meta_data;

        return $this;
    }

    /**
     * Gets include_user_tags
     * @return bool
     */
    public function getIncludeUserTags()
    {
        return $this->container['include_user_tags'];
    }

    /**
     * Sets include_user_tags
     * @param bool $include_user_tags
     * @return $this
     */
    public function setIncludeUserTags($include_user_tags)
    {
        $this->container['include_user_tags'] = $include_user_tags;

        return $this;
    }

    /**
     * Gets include_party_name
     * @return bool
     */
    public function getIncludePartyName()
    {
        return $this->container['include_party_name'];
    }

    /**
     * Sets include_party_name
     * @param bool $include_party_name
     * @return $this
     */
    public function setIncludePartyName($include_party_name)
    {
        $this->container['include_party_name'] = $include_party_name;

        return $this;
    }

    /**
     * Gets include_pause
     * @return bool
     */
    public function getIncludePause()
    {
        return $this->container['include_pause'];
    }

    /**
     * Sets include_pause
     * @param bool $include_pause
     * @return $this
     */
    public function setIncludePause($include_pause)
    {
        $this->container['include_pause'] = $include_pause;

        return $this;
    }

    /**
     * Gets include_zones
     * @return bool
     */
    public function getIncludeZones()
    {
        return $this->container['include_zones'];
    }

    /**
     * Sets include_zones
     * @param bool $include_zones
     * @return $this
     */
    public function setIncludeZones($include_zones)
    {
        $this->container['include_zones'] = $include_zones;

        return $this;
    }

    /**
     * Gets include_driver_unavailabilities
     * @return bool
     */
    public function getIncludeDriverUnavailabilities()
    {
        return $this->container['include_driver_unavailabilities'];
    }

    /**
     * Sets include_driver_unavailabilities
     * @param bool $include_driver_unavailabilities
     * @return $this
     */
    public function setIncludeDriverUnavailabilities($include_driver_unavailabilities)
    {
        $this->container['include_driver_unavailabilities'] = $include_driver_unavailabilities;

        return $this;
    }

    /**
     * Gets include_links
     * @return bool
     */
    public function getIncludeLinks()
    {
        return $this->container['include_links'];
    }

    /**
     * Sets include_links
     * @param bool $include_links
     * @return $this
     */
    public function setIncludeLinks($include_links)
    {
        $this->container['include_links'] = $include_links;

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


