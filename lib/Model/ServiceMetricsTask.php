<?php
/**
 * ServiceMetricsTask
 *
 * PHP version 5
 *
 * @category Class
 * @package  SwaggerEbayFeedApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Feed API
 *
 * The Feed API lets sellers upload input files, download reports and files including their status, filter reports using URI parameters, and retrieve customer service metrics task details.
 *
 * OpenAPI spec version: v1.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SwaggerEbayFeedApi\Client\Model;

use \ArrayAccess;
use \SwaggerEbayFeedApi\Client\ObjectSerializer;

/**
 * ServiceMetricsTask Class Doc Comment
 *
 * @category Class
 * @package  SwaggerEbayFeedApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceMetricsTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceMetricsTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'completion_date' => 'string',
        'creation_date' => 'string',
        'detail_href' => 'string',
        'feed_type' => 'string',
        'filter_criteria' => '\SwaggerEbayFeedApi\Client\Model\CustomerServiceMetricsFilterCriteria',
        'schema_version' => 'string',
        'status' => 'string',
        'task_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'completion_date' => null,
        'creation_date' => null,
        'detail_href' => null,
        'feed_type' => null,
        'filter_criteria' => null,
        'schema_version' => null,
        'status' => null,
        'task_id' => null
    ];

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
        'completion_date' => 'completionDate',
        'creation_date' => 'creationDate',
        'detail_href' => 'detailHref',
        'feed_type' => 'feedType',
        'filter_criteria' => 'filterCriteria',
        'schema_version' => 'schemaVersion',
        'status' => 'status',
        'task_id' => 'taskId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'completion_date' => 'setCompletionDate',
        'creation_date' => 'setCreationDate',
        'detail_href' => 'setDetailHref',
        'feed_type' => 'setFeedType',
        'filter_criteria' => 'setFilterCriteria',
        'schema_version' => 'setSchemaVersion',
        'status' => 'setStatus',
        'task_id' => 'setTaskId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'completion_date' => 'getCompletionDate',
        'creation_date' => 'getCreationDate',
        'detail_href' => 'getDetailHref',
        'feed_type' => 'getFeedType',
        'filter_criteria' => 'getFilterCriteria',
        'schema_version' => 'getSchemaVersion',
        'status' => 'getStatus',
        'task_id' => 'getTaskId'
    ];

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
        $this->container['completion_date'] = isset($data['completion_date']) ? $data['completion_date'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['detail_href'] = isset($data['detail_href']) ? $data['detail_href'] : null;
        $this->container['feed_type'] = isset($data['feed_type']) ? $data['feed_type'] : null;
        $this->container['filter_criteria'] = isset($data['filter_criteria']) ? $data['filter_criteria'] : null;
        $this->container['schema_version'] = isset($data['schema_version']) ? $data['schema_version'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['task_id'] = isset($data['task_id']) ? $data['task_id'] : null;
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
     * Gets completion_date
     *
     * @return string
     */
    public function getCompletionDate()
    {
        return $this->container['completion_date'];
    }

    /**
     * Sets completion_date
     *
     * @param string $completion_date The timestamp when the customer service metrics task went into the COMPLETED or COMPLETED_WITH_ERROR state. This field is only returned if the status is one of the two completed values. This state means that eBay has compiled the report for the seller based on the seller&rsquo;s filter criteria, and the seller can run a getResultFile call to download the report.
     *
     * @return $this
     */
    public function setCompletionDate($completion_date)
    {
        $this->container['completion_date'] = $completion_date;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string $creation_date The date the customer service metrics task was created.
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets detail_href
     *
     * @return string
     */
    public function getDetailHref()
    {
        return $this->container['detail_href'];
    }

    /**
     * Sets detail_href
     *
     * @param string $detail_href The relative getCustomerServiceMetricTask call URI path to retrieve the corresponding task.
     *
     * @return $this
     */
    public function setDetailHref($detail_href)
    {
        $this->container['detail_href'] = $detail_href;

        return $this;
    }

    /**
     * Gets feed_type
     *
     * @return string
     */
    public function getFeedType()
    {
        return $this->container['feed_type'];
    }

    /**
     * Sets feed_type
     *
     * @param string $feed_type The feed type associated with the task.
     *
     * @return $this
     */
    public function setFeedType($feed_type)
    {
        $this->container['feed_type'] = $feed_type;

        return $this;
    }

    /**
     * Gets filter_criteria
     *
     * @return \SwaggerEbayFeedApi\Client\Model\CustomerServiceMetricsFilterCriteria
     */
    public function getFilterCriteria()
    {
        return $this->container['filter_criteria'];
    }

    /**
     * Sets filter_criteria
     *
     * @param \SwaggerEbayFeedApi\Client\Model\CustomerServiceMetricsFilterCriteria $filter_criteria filter_criteria
     *
     * @return $this
     */
    public function setFilterCriteria($filter_criteria)
    {
        $this->container['filter_criteria'] = $filter_criteria;

        return $this;
    }

    /**
     * Gets schema_version
     *
     * @return string
     */
    public function getSchemaVersion()
    {
        return $this->container['schema_version'];
    }

    /**
     * Sets schema_version
     *
     * @param string $schema_version The schema version number of the file format. If omitted, the default value is used. Default value: 1.0
     *
     * @return $this
     */
    public function setSchemaVersion($schema_version)
    {
        $this->container['schema_version'] = $schema_version;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status An enumeration value that indicates the state of the task. See FeedStatusEnum for values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/feed/types/api:FeedStatusEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets task_id
     *
     * @return string
     */
    public function getTaskId()
    {
        return $this->container['task_id'];
    }

    /**
     * Sets task_id
     *
     * @param string $task_id The unique eBay-assigned ID of the task.
     *
     * @return $this
     */
    public function setTaskId($task_id)
    {
        $this->container['task_id'] = $task_id;

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


