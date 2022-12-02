<?php
/**
 * FileModel
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
 * FileModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FileModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FileModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'uuid' => 'string',
        'file_type_id' => 'int',
        'file_type_name' => 'string',
        'object_id' => 'int',
        'object_type' => 'int',
        'object_type_name' => 'string',
        'reference' => 'string',
        'location' => 'string',
        'base64' => 'string',
        'meta_data' => '\BumbalClient\Model\MetaDataModel[]',
        'created_by' => 'int',
        'updated_by' => 'int',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'links' => '\BumbalClient\Model\LinkModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'uuid' => null,
        'file_type_id' => 'int64',
        'file_type_name' => null,
        'object_id' => 'int64',
        'object_type' => 'int64',
        'object_type_name' => null,
        'reference' => null,
        'location' => null,
        'base64' => null,
        'meta_data' => null,
        'created_by' => 'int64',
        'updated_by' => 'int64',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'links' => null
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
        'file_type_id' => 'file_type_id',
        'file_type_name' => 'file_type_name',
        'object_id' => 'object_id',
        'object_type' => 'object_type',
        'object_type_name' => 'object_type_name',
        'reference' => 'reference',
        'location' => 'location',
        'base64' => 'base64',
        'meta_data' => 'meta_data',
        'created_by' => 'created_by',
        'updated_by' => 'updated_by',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uuid' => 'setUuid',
        'file_type_id' => 'setFileTypeId',
        'file_type_name' => 'setFileTypeName',
        'object_id' => 'setObjectId',
        'object_type' => 'setObjectType',
        'object_type_name' => 'setObjectTypeName',
        'reference' => 'setReference',
        'location' => 'setLocation',
        'base64' => 'setBase64',
        'meta_data' => 'setMetaData',
        'created_by' => 'setCreatedBy',
        'updated_by' => 'setUpdatedBy',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uuid' => 'getUuid',
        'file_type_id' => 'getFileTypeId',
        'file_type_name' => 'getFileTypeName',
        'object_id' => 'getObjectId',
        'object_type' => 'getObjectType',
        'object_type_name' => 'getObjectTypeName',
        'reference' => 'getReference',
        'location' => 'getLocation',
        'base64' => 'getBase64',
        'meta_data' => 'getMetaData',
        'created_by' => 'getCreatedBy',
        'updated_by' => 'getUpdatedBy',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'links' => 'getLinks'
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
        $this->container['file_type_id'] = isset($data['file_type_id']) ? $data['file_type_id'] : null;
        $this->container['file_type_name'] = isset($data['file_type_name']) ? $data['file_type_name'] : null;
        $this->container['object_id'] = isset($data['object_id']) ? $data['object_id'] : null;
        $this->container['object_type'] = isset($data['object_type']) ? $data['object_type'] : null;
        $this->container['object_type_name'] = isset($data['object_type_name']) ? $data['object_type_name'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['base64'] = isset($data['base64']) ? $data['base64'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid 
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets file_type_id
     * @return int
     */
    public function getFileTypeId()
    {
        return $this->container['file_type_id'];
    }

    /**
     * Sets file_type_id
     * @param int $file_type_id 
     * @return $this
     */
    public function setFileTypeId($file_type_id)
    {
        $this->container['file_type_id'] = $file_type_id;

        return $this;
    }

    /**
     * Gets file_type_name
     * @return string
     */
    public function getFileTypeName()
    {
        return $this->container['file_type_name'];
    }

    /**
     * Sets file_type_name
     * @param string $file_type_name 
     * @return $this
     */
    public function setFileTypeName($file_type_name)
    {
        $this->container['file_type_name'] = $file_type_name;

        return $this;
    }

    /**
     * Gets object_id
     * @return int
     */
    public function getObjectId()
    {
        return $this->container['object_id'];
    }

    /**
     * Sets object_id
     * @param int $object_id 
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

        return $this;
    }

    /**
     * Gets object_type
     * @return int
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     * @param int $object_type Object type ID
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $this->container['object_type'] = $object_type;

        return $this;
    }

    /**
     * Gets object_type_name
     * @return string
     */
    public function getObjectTypeName()
    {
        return $this->container['object_type_name'];
    }

    /**
     * Sets object_type_name
     * @param string $object_type_name Object type name
     * @return $this
     */
    public function setObjectTypeName($object_type_name)
    {
        $this->container['object_type_name'] = $object_type_name;

        return $this;
    }

    /**
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param string $reference 
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location 
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets base64
     * @return string
     */
    public function getBase64()
    {
        return $this->container['base64'];
    }

    /**
     * Sets base64
     * @param string $base64 
     * @return $this
     */
    public function setBase64($base64)
    {
        $this->container['base64'] = $base64;

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
     * Gets created_by
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     * @param int $created_by 
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets updated_by
     * @return int
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     * @param int $updated_by 
     * @return $this
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


