<?php
/**
 * QuestionnaireTemplateQuestionOptionsModel
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
 * QuestionnaireTemplateQuestionOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuestionnaireTemplateQuestionOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QuestionnaireTemplateQuestionOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_record_info' => 'bool',
        'include_options' => 'bool',
        'include_texts' => 'bool',
        'include_question_type_name' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_record_info' => null,
        'include_options' => null,
        'include_texts' => null,
        'include_question_type_name' => null
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
        'include_record_info' => 'include_record_info',
        'include_options' => 'include_options',
        'include_texts' => 'include_texts',
        'include_question_type_name' => 'include_question_type_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_record_info' => 'setIncludeRecordInfo',
        'include_options' => 'setIncludeOptions',
        'include_texts' => 'setIncludeTexts',
        'include_question_type_name' => 'setIncludeQuestionTypeName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_record_info' => 'getIncludeRecordInfo',
        'include_options' => 'getIncludeOptions',
        'include_texts' => 'getIncludeTexts',
        'include_question_type_name' => 'getIncludeQuestionTypeName'
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
        $this->container['include_record_info'] = isset($data['include_record_info']) ? $data['include_record_info'] : null;
        $this->container['include_options'] = isset($data['include_options']) ? $data['include_options'] : null;
        $this->container['include_texts'] = isset($data['include_texts']) ? $data['include_texts'] : null;
        $this->container['include_question_type_name'] = isset($data['include_question_type_name']) ? $data['include_question_type_name'] : null;
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
     * Gets include_record_info
     * @return bool
     */
    public function getIncludeRecordInfo()
    {
        return $this->container['include_record_info'];
    }

    /**
     * Sets include_record_info
     * @param bool $include_record_info
     * @return $this
     */
    public function setIncludeRecordInfo($include_record_info)
    {
        $this->container['include_record_info'] = $include_record_info;

        return $this;
    }

    /**
     * Gets include_options
     * @return bool
     */
    public function getIncludeOptions()
    {
        return $this->container['include_options'];
    }

    /**
     * Sets include_options
     * @param bool $include_options
     * @return $this
     */
    public function setIncludeOptions($include_options)
    {
        $this->container['include_options'] = $include_options;

        return $this;
    }

    /**
     * Gets include_texts
     * @return bool
     */
    public function getIncludeTexts()
    {
        return $this->container['include_texts'];
    }

    /**
     * Sets include_texts
     * @param bool $include_texts
     * @return $this
     */
    public function setIncludeTexts($include_texts)
    {
        $this->container['include_texts'] = $include_texts;

        return $this;
    }

    /**
     * Gets include_question_type_name
     * @return bool
     */
    public function getIncludeQuestionTypeName()
    {
        return $this->container['include_question_type_name'];
    }

    /**
     * Sets include_question_type_name
     * @param bool $include_question_type_name
     * @return $this
     */
    public function setIncludeQuestionTypeName($include_question_type_name)
    {
        $this->container['include_question_type_name'] = $include_question_type_name;

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


