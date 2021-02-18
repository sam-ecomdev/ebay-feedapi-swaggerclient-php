<?php
/**
 * CreateOrderTaskRequest
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
 * CreateOrderTaskRequest Class Doc Comment
 *
 * @category Class
 * @description The type that defines the fields for the &lt;b&gt; createOrderTask&lt;/b&gt; request.
 * @package  SwaggerEbayFeedApi\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateOrderTaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateOrderTaskRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'feed_type' => 'string',
        'filter_criteria' => '\SwaggerEbayFeedApi\Client\Model\OrderFilterCriteria',
        'schema_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'feed_type' => null,
        'filter_criteria' => null,
        'schema_version' => null
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
        'feed_type' => 'feedType',
        'filter_criteria' => 'filterCriteria',
        'schema_version' => 'schemaVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'feed_type' => 'setFeedType',
        'filter_criteria' => 'setFilterCriteria',
        'schema_version' => 'setSchemaVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'feed_type' => 'getFeedType',
        'filter_criteria' => 'getFilterCriteria',
        'schema_version' => 'getSchemaVersion'
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
        $this->container['feed_type'] = isset($data['feed_type']) ? $data['feed_type'] : null;
        $this->container['filter_criteria'] = isset($data['filter_criteria']) ? $data['filter_criteria'] : null;
        $this->container['schema_version'] = isset($data['schema_version']) ? $data['schema_version'] : null;
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
     * @param string $feed_type The feed type associated with the task. The only presently supported value is LMS_ORDER_REPORT.
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
     * @return \SwaggerEbayFeedApi\Client\Model\OrderFilterCriteria
     */
    public function getFilterCriteria()
    {
        return $this->container['filter_criteria'];
    }

    /**
     * Sets filter_criteria
     *
     * @param \SwaggerEbayFeedApi\Client\Model\OrderFilterCriteria $filter_criteria filter_criteria
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
     * @param string $schema_version The schema version of the LMS OrderReport. For the LMS_ORDER_REPORT feed type, see the OrderReport reference page to see the present schema version. The schemaVersion value is the version number shown at the top of the OrderReport page. Restriction: This value must be 1113 or higher. The OrderReport schema version is updated about every two weeks. All version numbers are odd numbers (even numbers are skipped). For example, the next release version after '1113' is '1115'.
     *
     * @return $this
     */
    public function setSchemaVersion($schema_version)
    {
        $this->container['schema_version'] = $schema_version;

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


