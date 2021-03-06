<?php
/**
 * StateMachineStateFlat
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
 * StateMachineStateFlat Class Doc Comment
 *
 * @category Class
 * @description Added since version: 6.0.0.0
 * @package  Rundum\Shopware6
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StateMachineStateFlat implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'state_machine_state_flat';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'technical_name' => 'string',
'name' => 'string',
'state_machine_id' => 'string',
'custom_fields' => 'object',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'translated' => 'object',
'state_machine' => '\Rundum\Shopware6\Model\StateMachineFlat',
'from_state_machine_transitions' => '\Rundum\Shopware6\Model\StateMachineTransitionFlat',
'to_state_machine_transitions' => '\Rundum\Shopware6\Model\StateMachineTransitionFlat',
'order_transactions' => '\Rundum\Shopware6\Model\OrderTransactionFlat',
'order_deliveries' => '\Rundum\Shopware6\Model\OrderDeliveryFlat',
'orders' => '\Rundum\Shopware6\Model\OrderFlat',
'to_state_machine_history_entries' => '\Rundum\Shopware6\Model\StateMachineHistoryFlat',
'from_state_machine_history_entries' => '\Rundum\Shopware6\Model\StateMachineHistoryFlat'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'technical_name' => null,
'name' => null,
'state_machine_id' => 'uuid',
'custom_fields' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'translated' => null,
'state_machine' => null,
'from_state_machine_transitions' => null,
'to_state_machine_transitions' => null,
'order_transactions' => null,
'order_deliveries' => null,
'orders' => null,
'to_state_machine_history_entries' => null,
'from_state_machine_history_entries' => null    ];

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
'technical_name' => 'technicalName',
'name' => 'name',
'state_machine_id' => 'stateMachineId',
'custom_fields' => 'customFields',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'translated' => 'translated',
'state_machine' => 'stateMachine',
'from_state_machine_transitions' => 'fromStateMachineTransitions',
'to_state_machine_transitions' => 'toStateMachineTransitions',
'order_transactions' => 'orderTransactions',
'order_deliveries' => 'orderDeliveries',
'orders' => 'orders',
'to_state_machine_history_entries' => 'toStateMachineHistoryEntries',
'from_state_machine_history_entries' => 'fromStateMachineHistoryEntries'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'technical_name' => 'setTechnicalName',
'name' => 'setName',
'state_machine_id' => 'setStateMachineId',
'custom_fields' => 'setCustomFields',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'translated' => 'setTranslated',
'state_machine' => 'setStateMachine',
'from_state_machine_transitions' => 'setFromStateMachineTransitions',
'to_state_machine_transitions' => 'setToStateMachineTransitions',
'order_transactions' => 'setOrderTransactions',
'order_deliveries' => 'setOrderDeliveries',
'orders' => 'setOrders',
'to_state_machine_history_entries' => 'setToStateMachineHistoryEntries',
'from_state_machine_history_entries' => 'setFromStateMachineHistoryEntries'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'technical_name' => 'getTechnicalName',
'name' => 'getName',
'state_machine_id' => 'getStateMachineId',
'custom_fields' => 'getCustomFields',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'translated' => 'getTranslated',
'state_machine' => 'getStateMachine',
'from_state_machine_transitions' => 'getFromStateMachineTransitions',
'to_state_machine_transitions' => 'getToStateMachineTransitions',
'order_transactions' => 'getOrderTransactions',
'order_deliveries' => 'getOrderDeliveries',
'orders' => 'getOrders',
'to_state_machine_history_entries' => 'getToStateMachineHistoryEntries',
'from_state_machine_history_entries' => 'getFromStateMachineHistoryEntries'    ];

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
        $this->container['technical_name'] = isset($data['technical_name']) ? $data['technical_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['state_machine_id'] = isset($data['state_machine_id']) ? $data['state_machine_id'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['translated'] = isset($data['translated']) ? $data['translated'] : null;
        $this->container['state_machine'] = isset($data['state_machine']) ? $data['state_machine'] : null;
        $this->container['from_state_machine_transitions'] = isset($data['from_state_machine_transitions']) ? $data['from_state_machine_transitions'] : null;
        $this->container['to_state_machine_transitions'] = isset($data['to_state_machine_transitions']) ? $data['to_state_machine_transitions'] : null;
        $this->container['order_transactions'] = isset($data['order_transactions']) ? $data['order_transactions'] : null;
        $this->container['order_deliveries'] = isset($data['order_deliveries']) ? $data['order_deliveries'] : null;
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['to_state_machine_history_entries'] = isset($data['to_state_machine_history_entries']) ? $data['to_state_machine_history_entries'] : null;
        $this->container['from_state_machine_history_entries'] = isset($data['from_state_machine_history_entries']) ? $data['from_state_machine_history_entries'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['technical_name'] === null) {
            $invalidProperties[] = "'technical_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['state_machine_id'] === null) {
            $invalidProperties[] = "'state_machine_id' can't be null";
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
     * Gets technical_name
     *
     * @return string
     */
    public function getTechnicalName()
    {
        return $this->container['technical_name'];
    }

    /**
     * Sets technical_name
     *
     * @param string $technical_name technical_name
     *
     * @return $this
     */
    public function setTechnicalName($technical_name)
    {
        $this->container['technical_name'] = $technical_name;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets state_machine_id
     *
     * @return string
     */
    public function getStateMachineId()
    {
        return $this->container['state_machine_id'];
    }

    /**
     * Sets state_machine_id
     *
     * @param string $state_machine_id state_machine_id
     *
     * @return $this
     */
    public function setStateMachineId($state_machine_id)
    {
        $this->container['state_machine_id'] = $state_machine_id;

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
     * Gets translated
     *
     * @return object
     */
    public function getTranslated()
    {
        return $this->container['translated'];
    }

    /**
     * Sets translated
     *
     * @param object $translated translated
     *
     * @return $this
     */
    public function setTranslated($translated)
    {
        $this->container['translated'] = $translated;

        return $this;
    }

    /**
     * Gets state_machine
     *
     * @return \Rundum\Shopware6\Model\StateMachineFlat
     */
    public function getStateMachine()
    {
        return $this->container['state_machine'];
    }

    /**
     * Sets state_machine
     *
     * @param \Rundum\Shopware6\Model\StateMachineFlat $state_machine state_machine
     *
     * @return $this
     */
    public function setStateMachine($state_machine)
    {
        $this->container['state_machine'] = $state_machine;

        return $this;
    }

    /**
     * Gets from_state_machine_transitions
     *
     * @return \Rundum\Shopware6\Model\StateMachineTransitionFlat
     */
    public function getFromStateMachineTransitions()
    {
        return $this->container['from_state_machine_transitions'];
    }

    /**
     * Sets from_state_machine_transitions
     *
     * @param \Rundum\Shopware6\Model\StateMachineTransitionFlat $from_state_machine_transitions from_state_machine_transitions
     *
     * @return $this
     */
    public function setFromStateMachineTransitions($from_state_machine_transitions)
    {
        $this->container['from_state_machine_transitions'] = $from_state_machine_transitions;

        return $this;
    }

    /**
     * Gets to_state_machine_transitions
     *
     * @return \Rundum\Shopware6\Model\StateMachineTransitionFlat
     */
    public function getToStateMachineTransitions()
    {
        return $this->container['to_state_machine_transitions'];
    }

    /**
     * Sets to_state_machine_transitions
     *
     * @param \Rundum\Shopware6\Model\StateMachineTransitionFlat $to_state_machine_transitions to_state_machine_transitions
     *
     * @return $this
     */
    public function setToStateMachineTransitions($to_state_machine_transitions)
    {
        $this->container['to_state_machine_transitions'] = $to_state_machine_transitions;

        return $this;
    }

    /**
     * Gets order_transactions
     *
     * @return \Rundum\Shopware6\Model\OrderTransactionFlat
     */
    public function getOrderTransactions()
    {
        return $this->container['order_transactions'];
    }

    /**
     * Sets order_transactions
     *
     * @param \Rundum\Shopware6\Model\OrderTransactionFlat $order_transactions order_transactions
     *
     * @return $this
     */
    public function setOrderTransactions($order_transactions)
    {
        $this->container['order_transactions'] = $order_transactions;

        return $this;
    }

    /**
     * Gets order_deliveries
     *
     * @return \Rundum\Shopware6\Model\OrderDeliveryFlat
     */
    public function getOrderDeliveries()
    {
        return $this->container['order_deliveries'];
    }

    /**
     * Sets order_deliveries
     *
     * @param \Rundum\Shopware6\Model\OrderDeliveryFlat $order_deliveries order_deliveries
     *
     * @return $this
     */
    public function setOrderDeliveries($order_deliveries)
    {
        $this->container['order_deliveries'] = $order_deliveries;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \Rundum\Shopware6\Model\OrderFlat
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \Rundum\Shopware6\Model\OrderFlat $orders orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets to_state_machine_history_entries
     *
     * @return \Rundum\Shopware6\Model\StateMachineHistoryFlat
     */
    public function getToStateMachineHistoryEntries()
    {
        return $this->container['to_state_machine_history_entries'];
    }

    /**
     * Sets to_state_machine_history_entries
     *
     * @param \Rundum\Shopware6\Model\StateMachineHistoryFlat $to_state_machine_history_entries to_state_machine_history_entries
     *
     * @return $this
     */
    public function setToStateMachineHistoryEntries($to_state_machine_history_entries)
    {
        $this->container['to_state_machine_history_entries'] = $to_state_machine_history_entries;

        return $this;
    }

    /**
     * Gets from_state_machine_history_entries
     *
     * @return \Rundum\Shopware6\Model\StateMachineHistoryFlat
     */
    public function getFromStateMachineHistoryEntries()
    {
        return $this->container['from_state_machine_history_entries'];
    }

    /**
     * Sets from_state_machine_history_entries
     *
     * @param \Rundum\Shopware6\Model\StateMachineHistoryFlat $from_state_machine_history_entries from_state_machine_history_entries
     *
     * @return $this
     */
    public function setFromStateMachineHistoryEntries($from_state_machine_history_entries)
    {
        $this->container['from_state_machine_history_entries'] = $from_state_machine_history_entries;

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
