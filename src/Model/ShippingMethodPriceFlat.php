<?php
/**
 * ShippingMethodPriceFlat
 *
 * PHP version 5
 *
 * @category Class
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Admin API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Rundum\Shopware6\Model;

use \ArrayAccess;
use \Rundum\Shopware6\ObjectSerializer;

/**
 * ShippingMethodPriceFlat Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingMethodPriceFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'shipping_method_price_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'shipping_method_id' => 'string',
'rule_id' => 'string',
'calculation' => 'int',
'calculation_rule_id' => 'string',
'quantity_start' => 'float',
'quantity_end' => 'float',
'currency_price' => 'object',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'shipping_method' => '\Rundum\Shopware6\Model\ShippingMethodFlat',
'rule' => '\Rundum\Shopware6\Model\RuleFlat',
'calculation_rule' => '\Rundum\Shopware6\Model\RuleFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'shipping_method_id' => 'uuid',
'rule_id' => 'uuid',
'calculation' => 'int64',
'calculation_rule_id' => 'uuid',
'quantity_start' => 'float',
'quantity_end' => 'float',
'currency_price' => null,
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'shipping_method' => null,
'rule' => null,
'calculation_rule' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'shipping_method_id' => 'shippingMethodId',
'rule_id' => 'ruleId',
'calculation' => 'calculation',
'calculation_rule_id' => 'calculationRuleId',
'quantity_start' => 'quantityStart',
'quantity_end' => 'quantityEnd',
'currency_price' => 'currencyPrice',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'shipping_method' => 'shippingMethod',
'rule' => 'rule',
'calculation_rule' => 'calculationRule'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'shipping_method_id' => 'setShippingMethodId',
'rule_id' => 'setRuleId',
'calculation' => 'setCalculation',
'calculation_rule_id' => 'setCalculationRuleId',
'quantity_start' => 'setQuantityStart',
'quantity_end' => 'setQuantityEnd',
'currency_price' => 'setCurrencyPrice',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'shipping_method' => 'setShippingMethod',
'rule' => 'setRule',
'calculation_rule' => 'setCalculationRule'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'shipping_method_id' => 'getShippingMethodId',
'rule_id' => 'getRuleId',
'calculation' => 'getCalculation',
'calculation_rule_id' => 'getCalculationRuleId',
'quantity_start' => 'getQuantityStart',
'quantity_end' => 'getQuantityEnd',
'currency_price' => 'getCurrencyPrice',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'shipping_method' => 'getShippingMethod',
'rule' => 'getRule',
'calculation_rule' => 'getCalculationRule'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['shipping_method_id'] = isset($data['shipping_method_id']) ? $data['shipping_method_id'] : null;
        $this->container['rule_id'] = isset($data['rule_id']) ? $data['rule_id'] : null;
        $this->container['calculation'] = isset($data['calculation']) ? $data['calculation'] : null;
        $this->container['calculation_rule_id'] = isset($data['calculation_rule_id']) ? $data['calculation_rule_id'] : null;
        $this->container['quantity_start'] = isset($data['quantity_start']) ? $data['quantity_start'] : null;
        $this->container['quantity_end'] = isset($data['quantity_end']) ? $data['quantity_end'] : null;
        $this->container['currency_price'] = isset($data['currency_price']) ? $data['currency_price'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['shipping_method'] = isset($data['shipping_method']) ? $data['shipping_method'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['calculation_rule'] = isset($data['calculation_rule']) ? $data['calculation_rule'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipping_method_id'] === null) {
            $invalidProperties[] = "'shipping_method_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets shipping_method_id
     *
     * @return string
     */
    public function getShippingMethodId()
    {
        return $this->container['shipping_method_id'];
    }

    /**
     * Sets shipping_method_id
     *
     * @param string $shipping_method_id shipping_method_id
     *
     * @return $this
     */
    public function setShippingMethodId($shipping_method_id)
    {
        $this->container['shipping_method_id'] = $shipping_method_id;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return string
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param string $rule_id rule_id
     *
     * @return $this
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets calculation
     *
     * @return int
     */
    public function getCalculation()
    {
        return $this->container['calculation'];
    }

    /**
     * Sets calculation
     *
     * @param int $calculation calculation
     *
     * @return $this
     */
    public function setCalculation($calculation)
    {
        $this->container['calculation'] = $calculation;

        return $this;
    }

    /**
     * Gets calculation_rule_id
     *
     * @return string
     */
    public function getCalculationRuleId()
    {
        return $this->container['calculation_rule_id'];
    }

    /**
     * Sets calculation_rule_id
     *
     * @param string $calculation_rule_id calculation_rule_id
     *
     * @return $this
     */
    public function setCalculationRuleId($calculation_rule_id)
    {
        $this->container['calculation_rule_id'] = $calculation_rule_id;

        return $this;
    }

    /**
     * Gets quantity_start
     *
     * @return float
     */
    public function getQuantityStart()
    {
        return $this->container['quantity_start'];
    }

    /**
     * Sets quantity_start
     *
     * @param float $quantity_start quantity_start
     *
     * @return $this
     */
    public function setQuantityStart($quantity_start)
    {
        $this->container['quantity_start'] = $quantity_start;

        return $this;
    }

    /**
     * Gets quantity_end
     *
     * @return float
     */
    public function getQuantityEnd()
    {
        return $this->container['quantity_end'];
    }

    /**
     * Sets quantity_end
     *
     * @param float $quantity_end quantity_end
     *
     * @return $this
     */
    public function setQuantityEnd($quantity_end)
    {
        $this->container['quantity_end'] = $quantity_end;

        return $this;
    }

    /**
     * Gets currency_price
     *
     * @return object
     */
    public function getCurrencyPrice()
    {
        return $this->container['currency_price'];
    }

    /**
     * Sets currency_price
     *
     * @param object $currency_price currency_price
     *
     * @return $this
     */
    public function setCurrencyPrice($currency_price)
    {
        $this->container['currency_price'] = $currency_price;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return object
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param object $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return \Rundum\Shopware6\Model\ShippingMethodFlat
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param \Rundum\Shopware6\Model\ShippingMethodFlat $shipping_method shipping_method
     *
     * @return $this
     */
    public function setShippingMethod($shipping_method)
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets rule
     *
     * @return \Rundum\Shopware6\Model\RuleFlat
     */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
     * Sets rule
     *
     * @param \Rundum\Shopware6\Model\RuleFlat $rule rule
     *
     * @return $this
     */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;

        return $this;
    }

    /**
     * Gets calculation_rule
     *
     * @return \Rundum\Shopware6\Model\RuleFlat
     */
    public function getCalculationRule()
    {
        return $this->container['calculation_rule'];
    }

    /**
     * Sets calculation_rule
     *
     * @param \Rundum\Shopware6\Model\RuleFlat $calculation_rule calculation_rule
     *
     * @return $this
     */
    public function setCalculationRule($calculation_rule)
    {
        $this->container['calculation_rule'] = $calculation_rule;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
