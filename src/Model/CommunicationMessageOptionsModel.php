<?php
/**
 * CommunicationMessageOptionsModel
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
 * CommunicationMessageOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CommunicationMessageOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CommunicationMessageOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_communication_mapping' => 'bool',
        'include_communication_message_content' => 'bool',
        'include_communication_message_history' => 'bool',
        'include_communication_message_type_name' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_communication_mapping' => null,
        'include_communication_message_content' => null,
        'include_communication_message_history' => null,
        'include_communication_message_type_name' => null
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
        'include_communication_mapping' => 'include_communication_mapping',
        'include_communication_message_content' => 'include_communication_message_content',
        'include_communication_message_history' => 'include_communication_message_history',
        'include_communication_message_type_name' => 'include_communication_message_type_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_communication_mapping' => 'setIncludeCommunicationMapping',
        'include_communication_message_content' => 'setIncludeCommunicationMessageContent',
        'include_communication_message_history' => 'setIncludeCommunicationMessageHistory',
        'include_communication_message_type_name' => 'setIncludeCommunicationMessageTypeName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_communication_mapping' => 'getIncludeCommunicationMapping',
        'include_communication_message_content' => 'getIncludeCommunicationMessageContent',
        'include_communication_message_history' => 'getIncludeCommunicationMessageHistory',
        'include_communication_message_type_name' => 'getIncludeCommunicationMessageTypeName'
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
        $this->container['include_communication_mapping'] = isset($data['include_communication_mapping']) ? $data['include_communication_mapping'] : false;
        $this->container['include_communication_message_content'] = isset($data['include_communication_message_content']) ? $data['include_communication_message_content'] : false;
        $this->container['include_communication_message_history'] = isset($data['include_communication_message_history']) ? $data['include_communication_message_history'] : false;
        $this->container['include_communication_message_type_name'] = isset($data['include_communication_message_type_name']) ? $data['include_communication_message_type_name'] : false;
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
     * Gets include_communication_mapping
     * @return bool
     */
    public function getIncludeCommunicationMapping()
    {
        return $this->container['include_communication_mapping'];
    }

    /**
     * Sets include_communication_mapping
     * @param bool $include_communication_mapping Include the communication mapping model that is used for this message
     * @return $this
     */
    public function setIncludeCommunicationMapping($include_communication_mapping)
    {
        $this->container['include_communication_mapping'] = $include_communication_mapping;

        return $this;
    }

    /**
     * Gets include_communication_message_content
     * @return bool
     */
    public function getIncludeCommunicationMessageContent()
    {
        return $this->container['include_communication_message_content'];
    }

    /**
     * Sets include_communication_message_content
     * @param bool $include_communication_message_content Include the content of the communication message
     * @return $this
     */
    public function setIncludeCommunicationMessageContent($include_communication_message_content)
    {
        $this->container['include_communication_message_content'] = $include_communication_message_content;

        return $this;
    }

    /**
     * Gets include_communication_message_history
     * @return bool
     */
    public function getIncludeCommunicationMessageHistory()
    {
        return $this->container['include_communication_message_history'];
    }

    /**
     * Sets include_communication_message_history
     * @param bool $include_communication_message_history Include the message history
     * @return $this
     */
    public function setIncludeCommunicationMessageHistory($include_communication_message_history)
    {
        $this->container['include_communication_message_history'] = $include_communication_message_history;

        return $this;
    }

    /**
     * Gets include_communication_message_type_name
     * @return bool
     */
    public function getIncludeCommunicationMessageTypeName()
    {
        return $this->container['include_communication_message_type_name'];
    }

    /**
     * Sets include_communication_message_type_name
     * @param bool $include_communication_message_type_name Include the message type name. This option only works when include_communication_mapping is also set to true!
     * @return $this
     */
    public function setIncludeCommunicationMessageTypeName($include_communication_message_type_name)
    {
        $this->container['include_communication_message_type_name'] = $include_communication_message_type_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
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


