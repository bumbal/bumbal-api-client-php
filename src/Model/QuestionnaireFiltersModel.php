<?php
/**
 * QuestionnaireFiltersModel
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
 * QuestionnaireFiltersModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuestionnaireFiltersModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QuestionnaireFiltersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'object_type' => 'int',
        'object_id' => 'int',
        'object_type_name' => 'string',
        'lang_code' => 'string',
        'questionnaire_type_name' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'object_type' => null,
        'object_id' => null,
        'object_type_name' => null,
        'lang_code' => 'string',
        'questionnaire_type_name' => null
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
        'object_type' => 'object_type',
        'object_id' => 'object_id',
        'object_type_name' => 'object_type_name',
        'lang_code' => 'lang_code',
        'questionnaire_type_name' => 'questionnaire_type_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'object_type' => 'setObjectType',
        'object_id' => 'setObjectId',
        'object_type_name' => 'setObjectTypeName',
        'lang_code' => 'setLangCode',
        'questionnaire_type_name' => 'setQuestionnaireTypeName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'object_type' => 'getObjectType',
        'object_id' => 'getObjectId',
        'object_type_name' => 'getObjectTypeName',
        'lang_code' => 'getLangCode',
        'questionnaire_type_name' => 'getQuestionnaireTypeName'
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
        $this->container['object_type'] = isset($data['object_type']) ? $data['object_type'] : null;
        $this->container['object_id'] = isset($data['object_id']) ? $data['object_id'] : null;
        $this->container['object_type_name'] = isset($data['object_type_name']) ? $data['object_type_name'] : null;
        $this->container['lang_code'] = isset($data['lang_code']) ? $data['lang_code'] : null;
        $this->container['questionnaire_type_name'] = isset($data['questionnaire_type_name']) ? $data['questionnaire_type_name'] : null;
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
     * Gets object_type
     * @return int
     */
    public function getObjectType()
    {
        return $this->container['object_type'];
    }

    /**
     * Sets object_type
     * @param int $object_type Object type IDs available for this questionnaire
     * @return $this
     */
    public function setObjectType($object_type)
    {
        $this->container['object_type'] = $object_type;

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
     * @param int $object_id Object id's available for this questionnaire
     * @return $this
     */
    public function setObjectId($object_id)
    {
        $this->container['object_id'] = $object_id;

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
     * @param string $object_type_name Object type name available for this questionnaire
     * @return $this
     */
    public function setObjectTypeName($object_type_name)
    {
        $this->container['object_type_name'] = $object_type_name;

        return $this;
    }

    /**
     * Gets lang_code
     * @return string
     */
    public function getLangCode()
    {
        return $this->container['lang_code'];
    }

    /**
     * Sets lang_code
     * @param string $lang_code ISO lang code
     * @return $this
     */
    public function setLangCode($lang_code)
    {
        $this->container['lang_code'] = $lang_code;

        return $this;
    }

    /**
     * Gets questionnaire_type_name
     * @return object
     */
    public function getQuestionnaireTypeName()
    {
        return $this->container['questionnaire_type_name'];
    }

    /**
     * Sets questionnaire_type_name
     * @param object $questionnaire_type_name Questionnaire type name
     * @return $this
     */
    public function setQuestionnaireTypeName($questionnaire_type_name)
    {
        $this->container['questionnaire_type_name'] = $questionnaire_type_name;

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


