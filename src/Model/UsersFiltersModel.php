<?php
/**
 * UsersFiltersModel
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
 * UsersFiltersModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UsersFiltersModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UsersFiltersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int[]',
        'uuid' => 'string[]',
        'pause_id' => 'int[]',
        'role_id' => 'int[]',
        'party_id' => 'int[]',
        'tag_names' => 'string[]',
        'zone_names' => 'string[]',
        'system' => 'bool[]',
        'activated' => 'bool[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'uuid' => null,
        'pause_id' => null,
        'role_id' => null,
        'party_id' => null,
        'tag_names' => null,
        'zone_names' => null,
        'system' => null,
        'activated' => null
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
        'id' => 'id',
        'uuid' => 'uuid',
        'pause_id' => 'pause_id',
        'role_id' => 'role_id',
        'party_id' => 'party_id',
        'tag_names' => 'tag_names',
        'zone_names' => 'zone_names',
        'system' => 'system',
        'activated' => 'activated'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uuid' => 'setUuid',
        'pause_id' => 'setPauseId',
        'role_id' => 'setRoleId',
        'party_id' => 'setPartyId',
        'tag_names' => 'setTagNames',
        'zone_names' => 'setZoneNames',
        'system' => 'setSystem',
        'activated' => 'setActivated'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uuid' => 'getUuid',
        'pause_id' => 'getPauseId',
        'role_id' => 'getRoleId',
        'party_id' => 'getPartyId',
        'tag_names' => 'getTagNames',
        'zone_names' => 'getZoneNames',
        'system' => 'getSystem',
        'activated' => 'getActivated'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['pause_id'] = isset($data['pause_id']) ? $data['pause_id'] : null;
        $this->container['role_id'] = isset($data['role_id']) ? $data['role_id'] : null;
        $this->container['party_id'] = isset($data['party_id']) ? $data['party_id'] : null;
        $this->container['tag_names'] = isset($data['tag_names']) ? $data['tag_names'] : null;
        $this->container['zone_names'] = isset($data['zone_names']) ? $data['zone_names'] : null;
        $this->container['system'] = isset($data['system']) ? $data['system'] : null;
        $this->container['activated'] = isset($data['activated']) ? $data['activated'] : null;
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
     * Gets id
     * @return int[]
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int[] $id 
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets uuid
     * @return string[]
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string[] $uuid unique per user
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets pause_id
     * @return int[]
     */
    public function getPauseId()
    {
        return $this->container['pause_id'];
    }

    /**
     * Sets pause_id
     * @param int[] $pause_id ids of pause schemes applied to user with teh role driver
     * @return $this
     */
    public function setPauseId($pause_id)
    {
        $this->container['pause_id'] = $pause_id;

        return $this;
    }

    /**
     * Gets role_id
     * @return int[]
     */
    public function getRoleId()
    {
        return $this->container['role_id'];
    }

    /**
     * Sets role_id
     * @param int[] $role_id ids of the user roles, 1: Guest, 2: Driver, 3: Planner, 4: Manager, 5: Admin
     * @return $this
     */
    public function setRoleId($role_id)
    {
        $this->container['role_id'] = $role_id;

        return $this;
    }

    /**
     * Gets party_id
     * @return int[]
     */
    public function getPartyId()
    {
        return $this->container['party_id'];
    }

    /**
     * Sets party_id
     * @param int[] $party_id Associated Party IDs
     * @return $this
     */
    public function setPartyId($party_id)
    {
        $this->container['party_id'] = $party_id;

        return $this;
    }

    /**
     * Gets tag_names
     * @return string[]
     */
    public function getTagNames()
    {
        return $this->container['tag_names'];
    }

    /**
     * Sets tag_names
     * @param string[] $tag_names Tag names
     * @return $this
     */
    public function setTagNames($tag_names)
    {
        $this->container['tag_names'] = $tag_names;

        return $this;
    }

    /**
     * Gets zone_names
     * @return string[]
     */
    public function getZoneNames()
    {
        return $this->container['zone_names'];
    }

    /**
     * Sets zone_names
     * @param string[] $zone_names Zone names
     * @return $this
     */
    public function setZoneNames($zone_names)
    {
        $this->container['zone_names'] = $zone_names;

        return $this;
    }

    /**
     * Gets system
     * @return bool[]
     */
    public function getSystem()
    {
        return $this->container['system'];
    }

    /**
     * Sets system
     * @param bool[] $system System users
     * @return $this
     */
    public function setSystem($system)
    {
        $this->container['system'] = $system;

        return $this;
    }

    /**
     * Gets activated
     * @return bool[]
     */
    public function getActivated()
    {
        return $this->container['activated'];
    }

    /**
     * Sets activated
     * @param bool[] $activated Activated users
     * @return $this
     */
    public function setActivated($activated)
    {
        $this->container['activated'] = $activated;

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


