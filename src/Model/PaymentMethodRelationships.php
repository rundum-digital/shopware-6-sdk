<?php
/**
 * PaymentMethodRelationships
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
 * PaymentMethodRelationships Class Doc Comment
 *
 * @category Class
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethodRelationships implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'payment_method_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'media' => '\Rundum\Shopware6\Model\PaymentMethodRelationshipsMedia',
'availability_rule' => '\Rundum\Shopware6\Model\PaymentMethodRelationshipsAvailabilityRule',
'sales_channel_default_assignments' => '\Rundum\Shopware6\Model\PaymentMethodRelationshipsSalesChannelDefaultAssignments',
'plugin' => '\Rundum\Shopware6\Model\PaymentMethodRelationshipsPlugin',
'customers' => '\Rundum\Shopware6\Model\PaymentMethodRelationshipsCustomers',
'order_transactions' => '\Rundum\Shopware6\Model\PaymentMethodRelationshipsOrderTransactions',
'sales_channels' => '\Rundum\Shopware6\Model\PaymentMethodRelationshipsSalesChannels'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'media' => null,
'availability_rule' => null,
'sales_channel_default_assignments' => null,
'plugin' => null,
'customers' => null,
'order_transactions' => null,
'sales_channels' => null    ];

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
        'media' => 'media',
'availability_rule' => 'availabilityRule',
'sales_channel_default_assignments' => 'salesChannelDefaultAssignments',
'plugin' => 'plugin',
'customers' => 'customers',
'order_transactions' => 'orderTransactions',
'sales_channels' => 'salesChannels'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'media' => 'setMedia',
'availability_rule' => 'setAvailabilityRule',
'sales_channel_default_assignments' => 'setSalesChannelDefaultAssignments',
'plugin' => 'setPlugin',
'customers' => 'setCustomers',
'order_transactions' => 'setOrderTransactions',
'sales_channels' => 'setSalesChannels'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'media' => 'getMedia',
'availability_rule' => 'getAvailabilityRule',
'sales_channel_default_assignments' => 'getSalesChannelDefaultAssignments',
'plugin' => 'getPlugin',
'customers' => 'getCustomers',
'order_transactions' => 'getOrderTransactions',
'sales_channels' => 'getSalesChannels'    ];

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
        $this->container['media'] = isset($data['media']) ? $data['media'] : null;
        $this->container['availability_rule'] = isset($data['availability_rule']) ? $data['availability_rule'] : null;
        $this->container['sales_channel_default_assignments'] = isset($data['sales_channel_default_assignments']) ? $data['sales_channel_default_assignments'] : null;
        $this->container['plugin'] = isset($data['plugin']) ? $data['plugin'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['order_transactions'] = isset($data['order_transactions']) ? $data['order_transactions'] : null;
        $this->container['sales_channels'] = isset($data['sales_channels']) ? $data['sales_channels'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets media
     *
     * @return \Rundum\Shopware6\Model\PaymentMethodRelationshipsMedia
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \Rundum\Shopware6\Model\PaymentMethodRelationshipsMedia $media media
     *
     * @return $this
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets availability_rule
     *
     * @return \Rundum\Shopware6\Model\PaymentMethodRelationshipsAvailabilityRule
     */
    public function getAvailabilityRule()
    {
        return $this->container['availability_rule'];
    }

    /**
     * Sets availability_rule
     *
     * @param \Rundum\Shopware6\Model\PaymentMethodRelationshipsAvailabilityRule $availability_rule availability_rule
     *
     * @return $this
     */
    public function setAvailabilityRule($availability_rule)
    {
        $this->container['availability_rule'] = $availability_rule;

        return $this;
    }

    /**
     * Gets sales_channel_default_assignments
     *
     * @return \Rundum\Shopware6\Model\PaymentMethodRelationshipsSalesChannelDefaultAssignments
     */
    public function getSalesChannelDefaultAssignments()
    {
        return $this->container['sales_channel_default_assignments'];
    }

    /**
     * Sets sales_channel_default_assignments
     *
     * @param \Rundum\Shopware6\Model\PaymentMethodRelationshipsSalesChannelDefaultAssignments $sales_channel_default_assignments sales_channel_default_assignments
     *
     * @return $this
     */
    public function setSalesChannelDefaultAssignments($sales_channel_default_assignments)
    {
        $this->container['sales_channel_default_assignments'] = $sales_channel_default_assignments;

        return $this;
    }

    /**
     * Gets plugin
     *
     * @return \Rundum\Shopware6\Model\PaymentMethodRelationshipsPlugin
     */
    public function getPlugin()
    {
        return $this->container['plugin'];
    }

    /**
     * Sets plugin
     *
     * @param \Rundum\Shopware6\Model\PaymentMethodRelationshipsPlugin $plugin plugin
     *
     * @return $this
     */
    public function setPlugin($plugin)
    {
        $this->container['plugin'] = $plugin;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return \Rundum\Shopware6\Model\PaymentMethodRelationshipsCustomers
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \Rundum\Shopware6\Model\PaymentMethodRelationshipsCustomers $customers customers
     *
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

        return $this;
    }

    /**
     * Gets order_transactions
     *
     * @return \Rundum\Shopware6\Model\PaymentMethodRelationshipsOrderTransactions
     */
    public function getOrderTransactions()
    {
        return $this->container['order_transactions'];
    }

    /**
     * Sets order_transactions
     *
     * @param \Rundum\Shopware6\Model\PaymentMethodRelationshipsOrderTransactions $order_transactions order_transactions
     *
     * @return $this
     */
    public function setOrderTransactions($order_transactions)
    {
        $this->container['order_transactions'] = $order_transactions;

        return $this;
    }

    /**
     * Gets sales_channels
     *
     * @return \Rundum\Shopware6\Model\PaymentMethodRelationshipsSalesChannels
     */
    public function getSalesChannels()
    {
        return $this->container['sales_channels'];
    }

    /**
     * Sets sales_channels
     *
     * @param \Rundum\Shopware6\Model\PaymentMethodRelationshipsSalesChannels $sales_channels sales_channels
     *
     * @return $this
     */
    public function setSalesChannels($sales_channels)
    {
        $this->container['sales_channels'] = $sales_channels;

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
