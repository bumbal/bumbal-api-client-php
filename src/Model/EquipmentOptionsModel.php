<?php
/**
 * EquipmentOptionsModel
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
 * EquipmentOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EquipmentOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EquipmentOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_equipment_type_name' => 'bool',
        'include_equipment_tags' => 'bool',
        'include_tag_type_name' => 'bool',
        'include_equipment_meta_data' => 'bool',
        'include_equipment_files' => 'bool',
        'include_equipment_files_meta_data' => 'bool',
        'include_equipment_notes' => 'bool',
        'include_equipment_note_tags' => 'bool',
        'include_equipment_links' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_equipment_type_name' => null,
        'include_equipment_tags' => null,
        'include_tag_type_name' => null,
        'include_equipment_meta_data' => null,
        'include_equipment_files' => null,
        'include_equipment_files_meta_data' => null,
        'include_equipment_notes' => null,
        'include_equipment_note_tags' => null,
        'include_equipment_links' => null
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
        'include_equipment_type_name' => 'include_equipment_type_name',
        'include_equipment_tags' => 'include_equipment_tags',
        'include_tag_type_name' => 'include_tag_type_name',
        'include_equipment_meta_data' => 'include_equipment_meta_data',
        'include_equipment_files' => 'include_equipment_files',
        'include_equipment_files_meta_data' => 'include_equipment_files_meta_data',
        'include_equipment_notes' => 'include_equipment_notes',
        'include_equipment_note_tags' => 'include_equipment_note_tags',
        'include_equipment_links' => 'include_equipment_links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_equipment_type_name' => 'setIncludeEquipmentTypeName',
        'include_equipment_tags' => 'setIncludeEquipmentTags',
        'include_tag_type_name' => 'setIncludeTagTypeName',
        'include_equipment_meta_data' => 'setIncludeEquipmentMetaData',
        'include_equipment_files' => 'setIncludeEquipmentFiles',
        'include_equipment_files_meta_data' => 'setIncludeEquipmentFilesMetaData',
        'include_equipment_notes' => 'setIncludeEquipmentNotes',
        'include_equipment_note_tags' => 'setIncludeEquipmentNoteTags',
        'include_equipment_links' => 'setIncludeEquipmentLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_equipment_type_name' => 'getIncludeEquipmentTypeName',
        'include_equipment_tags' => 'getIncludeEquipmentTags',
        'include_tag_type_name' => 'getIncludeTagTypeName',
        'include_equipment_meta_data' => 'getIncludeEquipmentMetaData',
        'include_equipment_files' => 'getIncludeEquipmentFiles',
        'include_equipment_files_meta_data' => 'getIncludeEquipmentFilesMetaData',
        'include_equipment_notes' => 'getIncludeEquipmentNotes',
        'include_equipment_note_tags' => 'getIncludeEquipmentNoteTags',
        'include_equipment_links' => 'getIncludeEquipmentLinks'
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
        $this->container['include_equipment_type_name'] = isset($data['include_equipment_type_name']) ? $data['include_equipment_type_name'] : null;
        $this->container['include_equipment_tags'] = isset($data['include_equipment_tags']) ? $data['include_equipment_tags'] : null;
        $this->container['include_tag_type_name'] = isset($data['include_tag_type_name']) ? $data['include_tag_type_name'] : null;
        $this->container['include_equipment_meta_data'] = isset($data['include_equipment_meta_data']) ? $data['include_equipment_meta_data'] : null;
        $this->container['include_equipment_files'] = isset($data['include_equipment_files']) ? $data['include_equipment_files'] : null;
        $this->container['include_equipment_files_meta_data'] = isset($data['include_equipment_files_meta_data']) ? $data['include_equipment_files_meta_data'] : null;
        $this->container['include_equipment_notes'] = isset($data['include_equipment_notes']) ? $data['include_equipment_notes'] : null;
        $this->container['include_equipment_note_tags'] = isset($data['include_equipment_note_tags']) ? $data['include_equipment_note_tags'] : null;
        $this->container['include_equipment_links'] = isset($data['include_equipment_links']) ? $data['include_equipment_links'] : null;
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
     * Gets include_equipment_type_name
     * @return bool
     */
    public function getIncludeEquipmentTypeName()
    {
        return $this->container['include_equipment_type_name'];
    }

    /**
     * Sets include_equipment_type_name
     * @param bool $include_equipment_type_name
     * @return $this
     */
    public function setIncludeEquipmentTypeName($include_equipment_type_name)
    {
        $this->container['include_equipment_type_name'] = $include_equipment_type_name;

        return $this;
    }

    /**
     * Gets include_equipment_tags
     * @return bool
     */
    public function getIncludeEquipmentTags()
    {
        return $this->container['include_equipment_tags'];
    }

    /**
     * Sets include_equipment_tags
     * @param bool $include_equipment_tags
     * @return $this
     */
    public function setIncludeEquipmentTags($include_equipment_tags)
    {
        $this->container['include_equipment_tags'] = $include_equipment_tags;

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
     * Gets include_equipment_meta_data
     * @return bool
     */
    public function getIncludeEquipmentMetaData()
    {
        return $this->container['include_equipment_meta_data'];
    }

    /**
     * Sets include_equipment_meta_data
     * @param bool $include_equipment_meta_data
     * @return $this
     */
    public function setIncludeEquipmentMetaData($include_equipment_meta_data)
    {
        $this->container['include_equipment_meta_data'] = $include_equipment_meta_data;

        return $this;
    }

    /**
     * Gets include_equipment_files
     * @return bool
     */
    public function getIncludeEquipmentFiles()
    {
        return $this->container['include_equipment_files'];
    }

    /**
     * Sets include_equipment_files
     * @param bool $include_equipment_files
     * @return $this
     */
    public function setIncludeEquipmentFiles($include_equipment_files)
    {
        $this->container['include_equipment_files'] = $include_equipment_files;

        return $this;
    }

    /**
     * Gets include_equipment_files_meta_data
     * @return bool
     */
    public function getIncludeEquipmentFilesMetaData()
    {
        return $this->container['include_equipment_files_meta_data'];
    }

    /**
     * Sets include_equipment_files_meta_data
     * @param bool $include_equipment_files_meta_data
     * @return $this
     */
    public function setIncludeEquipmentFilesMetaData($include_equipment_files_meta_data)
    {
        $this->container['include_equipment_files_meta_data'] = $include_equipment_files_meta_data;

        return $this;
    }

    /**
     * Gets include_equipment_notes
     * @return bool
     */
    public function getIncludeEquipmentNotes()
    {
        return $this->container['include_equipment_notes'];
    }

    /**
     * Sets include_equipment_notes
     * @param bool $include_equipment_notes
     * @return $this
     */
    public function setIncludeEquipmentNotes($include_equipment_notes)
    {
        $this->container['include_equipment_notes'] = $include_equipment_notes;

        return $this;
    }

    /**
     * Gets include_equipment_note_tags
     * @return bool
     */
    public function getIncludeEquipmentNoteTags()
    {
        return $this->container['include_equipment_note_tags'];
    }

    /**
     * Sets include_equipment_note_tags
     * @param bool $include_equipment_note_tags
     * @return $this
     */
    public function setIncludeEquipmentNoteTags($include_equipment_note_tags)
    {
        $this->container['include_equipment_note_tags'] = $include_equipment_note_tags;

        return $this;
    }

    /**
     * Gets include_equipment_links
     * @return bool
     */
    public function getIncludeEquipmentLinks()
    {
        return $this->container['include_equipment_links'];
    }

    /**
     * Sets include_equipment_links
     * @param bool $include_equipment_links
     * @return $this
     */
    public function setIncludeEquipmentLinks($include_equipment_links)
    {
        $this->container['include_equipment_links'] = $include_equipment_links;

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


