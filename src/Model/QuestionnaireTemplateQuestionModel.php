<?php
/**
 * QuestionnaireTemplateQuestionModel
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
 * QuestionnaireTemplateQuestionModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuestionnaireTemplateQuestionModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QuestionnaireTemplateQuestionModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'active' => 'bool',
        'questionnaire_template_id' => 'int',
        'question_type_id' => 'int',
        'question_type_name' => 'string',
        'order' => 'int',
        'options' => '\BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel[]',
        'texts' => '\BumbalClient\Model\QuestionnaireTemplateQuestionTextModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'active' => null,
        'questionnaire_template_id' => 'int64',
        'question_type_id' => 'int64',
        'question_type_name' => 'string',
        'order' => 'int64',
        'options' => null,
        'texts' => null
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
        'active' => 'active',
        'questionnaire_template_id' => 'questionnaire_template_id',
        'question_type_id' => 'question_type_id',
        'question_type_name' => 'question_type_name',
        'order' => 'order',
        'options' => 'options',
        'texts' => 'texts'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'active' => 'setActive',
        'questionnaire_template_id' => 'setQuestionnaireTemplateId',
        'question_type_id' => 'setQuestionTypeId',
        'question_type_name' => 'setQuestionTypeName',
        'order' => 'setOrder',
        'options' => 'setOptions',
        'texts' => 'setTexts'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'active' => 'getActive',
        'questionnaire_template_id' => 'getQuestionnaireTemplateId',
        'question_type_id' => 'getQuestionTypeId',
        'question_type_name' => 'getQuestionTypeName',
        'order' => 'getOrder',
        'options' => 'getOptions',
        'texts' => 'getTexts'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['questionnaire_template_id'] = isset($data['questionnaire_template_id']) ? $data['questionnaire_template_id'] : null;
        $this->container['question_type_id'] = isset($data['question_type_id']) ? $data['question_type_id'] : null;
        $this->container['question_type_name'] = isset($data['question_type_name']) ? $data['question_type_name'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['texts'] = isset($data['texts']) ? $data['texts'] : null;
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
     * @param int $id Unique Identifier
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active if active=0: note has been removed and is no longer visible in any bumbal interface
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets questionnaire_template_id
     * @return int
     */
    public function getQuestionnaireTemplateId()
    {
        return $this->container['questionnaire_template_id'];
    }

    /**
     * Sets questionnaire_template_id
     * @param int $questionnaire_template_id Questionnaire template id
     * @return $this
     */
    public function setQuestionnaireTemplateId($questionnaire_template_id)
    {
        $this->container['questionnaire_template_id'] = $questionnaire_template_id;

        return $this;
    }

    /**
     * Gets question_type_id
     * @return int
     */
    public function getQuestionTypeId()
    {
        return $this->container['question_type_id'];
    }

    /**
     * Sets question_type_id
     * @param int $question_type_id Question type id
     * @return $this
     */
    public function setQuestionTypeId($question_type_id)
    {
        $this->container['question_type_id'] = $question_type_id;

        return $this;
    }

    /**
     * Gets question_type_name
     * @return string
     */
    public function getQuestionTypeName()
    {
        return $this->container['question_type_name'];
    }

    /**
     * Sets question_type_name
     * @param string $question_type_name Question type name
     * @return $this
     */
    public function setQuestionTypeName($question_type_name)
    {
        $this->container['question_type_name'] = $question_type_name;

        return $this;
    }

    /**
     * Gets order
     * @return int
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     * @param int $order Order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

        return $this;
    }

    /**
     * Gets options
     * @return \BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionOptionModel[] $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets texts
     * @return \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel[]
     */
    public function getTexts()
    {
        return $this->container['texts'];
    }

    /**
     * Sets texts
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionTextModel[] $texts
     * @return $this
     */
    public function setTexts($texts)
    {
        $this->container['texts'] = $texts;

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


