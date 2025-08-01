<?php
/**
 * FileOptionsModel
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
 * FileOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FileOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FileOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_meta_data' => 'bool',
        'include_tag_type_name' => 'bool',
        'include_file_tags' => 'bool',
        'include_file_record_info' => 'bool',
        'include_file_base64' => 'bool',
        'include_links' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_meta_data' => null,
        'include_tag_type_name' => null,
        'include_file_tags' => null,
        'include_file_record_info' => null,
        'include_file_base64' => null,
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
        'include_meta_data' => 'include_meta_data',
        'include_tag_type_name' => 'include_tag_type_name',
        'include_file_tags' => 'include_file_tags',
        'include_file_record_info' => 'include_file_record_info',
        'include_file_base64' => 'include_file_base64',
        'include_links' => 'include_links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_meta_data' => 'setIncludeMetaData',
        'include_tag_type_name' => 'setIncludeTagTypeName',
        'include_file_tags' => 'setIncludeFileTags',
        'include_file_record_info' => 'setIncludeFileRecordInfo',
        'include_file_base64' => 'setIncludeFileBase64',
        'include_links' => 'setIncludeLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_meta_data' => 'getIncludeMetaData',
        'include_tag_type_name' => 'getIncludeTagTypeName',
        'include_file_tags' => 'getIncludeFileTags',
        'include_file_record_info' => 'getIncludeFileRecordInfo',
        'include_file_base64' => 'getIncludeFileBase64',
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
    public function __construct(?array $data = null)
    {
        $this->container['include_meta_data'] = isset($data['include_meta_data']) ? $data['include_meta_data'] : null;
        $this->container['include_tag_type_name'] = isset($data['include_tag_type_name']) ? $data['include_tag_type_name'] : null;
        $this->container['include_file_tags'] = isset($data['include_file_tags']) ? $data['include_file_tags'] : null;
        $this->container['include_file_record_info'] = isset($data['include_file_record_info']) ? $data['include_file_record_info'] : null;
        $this->container['include_file_base64'] = isset($data['include_file_base64']) ? $data['include_file_base64'] : null;
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
     * Gets include_meta_data
     * @return bool
     */
    public function getIncludeMetaData()
    {
        return $this->container['include_meta_data'];
    }

    /**
     * Sets include_meta_data
     * @param bool $include_meta_data
     * @return $this
     */
    public function setIncludeMetaData($include_meta_data)
    {
        $this->container['include_meta_data'] = $include_meta_data;

        return $this;
    }

    /**
     * Gets include_tag_type_name
     * @return bool
     */
    public function getIncludeTagTypeName()
    {
        return $this->container['include_tag_type_name'];
    }

    /**
     * Sets include_tag_type_name
     * @param bool $include_tag_type_name
     * @return $this
     */
    public function setIncludeTagTypeName($include_tag_type_name)
    {
        $this->container['include_tag_type_name'] = $include_tag_type_name;

        return $this;
    }

    /**
     * Gets include_file_tags
     * @return bool
     */
    public function getIncludeFileTags()
    {
        return $this->container['include_file_tags'];
    }

    /**
     * Sets include_file_tags
     * @param bool $include_file_tags
     * @return $this
     */
    public function setIncludeFileTags($include_file_tags)
    {
        $this->container['include_file_tags'] = $include_file_tags;

        return $this;
    }

    /**
     * Gets include_file_record_info
     * @return bool
     */
    public function getIncludeFileRecordInfo()
    {
        return $this->container['include_file_record_info'];
    }

    /**
     * Sets include_file_record_info
     * @param bool $include_file_record_info
     * @return $this
     */
    public function setIncludeFileRecordInfo($include_file_record_info)
    {
        $this->container['include_file_record_info'] = $include_file_record_info;

        return $this;
    }

    /**
     * Gets include_file_base64
     * @return bool
     */
    public function getIncludeFileBase64()
    {
        return $this->container['include_file_base64'];
    }

    /**
     * Sets include_file_base64
     * @param bool $include_file_base64
     * @return $this
     */
    public function setIncludeFileBase64($include_file_base64)
    {
        $this->container['include_file_base64'] = $include_file_base64;

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


