<?php
/**
 * EquipmentModel
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
 * EquipmentModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EquipmentModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EquipmentModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'equipment_type_id' => 'int',
        'equipment_type_name' => 'string',
        'info' => 'string',
        'name' => 'string',
        'registration_nr' => 'string',
        'max_speed' => 'int',
        'tags' => '\BumbalClient\Model\TagModel[]',
        'links' => '\BumbalClient\Model\LinkModel[]',
        'meta_data' => '\BumbalClient\Model\MetaDataModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'equipment_type_id' => null,
        'equipment_type_name' => null,
        'info' => null,
        'name' => null,
        'registration_nr' => null,
        'max_speed' => null,
        'tags' => null,
        'links' => null,
        'meta_data' => null
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
        'equipment_type_id' => 'equipment_type_id',
        'equipment_type_name' => 'equipment_type_name',
        'info' => 'info',
        'name' => 'name',
        'registration_nr' => 'registration_nr',
        'max_speed' => 'max_speed',
        'tags' => 'tags',
        'links' => 'links',
        'meta_data' => 'meta_data'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'equipment_type_id' => 'setEquipmentTypeId',
        'equipment_type_name' => 'setEquipmentTypeName',
        'info' => 'setInfo',
        'name' => 'setName',
        'registration_nr' => 'setRegistrationNr',
        'max_speed' => 'setMaxSpeed',
        'tags' => 'setTags',
        'links' => 'setLinks',
        'meta_data' => 'setMetaData'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'equipment_type_id' => 'getEquipmentTypeId',
        'equipment_type_name' => 'getEquipmentTypeName',
        'info' => 'getInfo',
        'name' => 'getName',
        'registration_nr' => 'getRegistrationNr',
        'max_speed' => 'getMaxSpeed',
        'tags' => 'getTags',
        'links' => 'getLinks',
        'meta_data' => 'getMetaData'
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

    const EQUIPMENT_TYPE_NAME_CAR = 'car';
    const EQUIPMENT_TYPE_NAME_TRAILER = 'trailer';
    const EQUIPMENT_TYPE_NAME_OTHER = 'other';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getEquipmentTypeNameAllowableValues()
    {
        return [
            self::EQUIPMENT_TYPE_NAME_CAR,
            self::EQUIPMENT_TYPE_NAME_TRAILER,
            self::EQUIPMENT_TYPE_NAME_OTHER,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['equipment_type_id'] = isset($data['equipment_type_id']) ? $data['equipment_type_id'] : null;
        $this->container['equipment_type_name'] = isset($data['equipment_type_name']) ? $data['equipment_type_name'] : null;
        $this->container['info'] = isset($data['info']) ? $data['info'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['registration_nr'] = isset($data['registration_nr']) ? $data['registration_nr'] : null;
        $this->container['max_speed'] = isset($data['max_speed']) ? $data['max_speed'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getEquipmentTypeNameAllowableValues();
        if (!in_array($this->container['equipment_type_name'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'equipment_type_name', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        $allowed_values = $this->getEquipmentTypeNameAllowableValues();
        if (!in_array($this->container['equipment_type_name'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets equipment_type_id
     * @return int
     */
    public function getEquipmentTypeId()
    {
        return $this->container['equipment_type_id'];
    }

    /**
     * Sets equipment_type_id
     * @param int $equipment_type_id Equipment Type ID
     * @return $this
     */
    public function setEquipmentTypeId($equipment_type_id)
    {
        $this->container['equipment_type_id'] = $equipment_type_id;

        return $this;
    }

    /**
     * Gets equipment_type_name
     * @return string
     */
    public function getEquipmentTypeName()
    {
        return $this->container['equipment_type_name'];
    }

    /**
     * Sets equipment_type_name
     * @param string $equipment_type_name Equipment Type Name
     * @return $this
     */
    public function setEquipmentTypeName($equipment_type_name)
    {
        $allowed_values = $this->getEquipmentTypeNameAllowableValues();
        if (!is_null($equipment_type_name) && !in_array($equipment_type_name, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'equipment_type_name', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['equipment_type_name'] = $equipment_type_name;

        return $this;
    }

    /**
     * Gets info
     * @return string
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     * @param string $info Any extra information
     * @return $this
     */
    public function setInfo($info)
    {
        $this->container['info'] = $info;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets registration_nr
     * @return string
     */
    public function getRegistrationNr()
    {
        return $this->container['registration_nr'];
    }

    /**
     * Sets registration_nr
     * @param string $registration_nr
     * @return $this
     */
    public function setRegistrationNr($registration_nr)
    {
        $this->container['registration_nr'] = $registration_nr;

        return $this;
    }

    /**
     * Gets max_speed
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->container['max_speed'];
    }

    /**
     * Sets max_speed
     * @param int $max_speed
     * @return $this
     */
    public function setMaxSpeed($max_speed)
    {
        $this->container['max_speed'] = $max_speed;

        return $this;
    }

    /**
     * Gets tags
     * @return \BumbalClient\Model\TagModel[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \BumbalClient\Model\TagModel[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets links
     * @return \BumbalClient\Model\LinkModel[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \BumbalClient\Model\LinkModel[] $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets meta_data
     * @return \BumbalClient\Model\MetaDataModel[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     * @param \BumbalClient\Model\MetaDataModel[] $meta_data
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

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


