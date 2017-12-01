<?php
/**
 * RepricingCSVRequestDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  eSagu\Amzn\RePricing\V1
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * eSagu amzn RePricing API
 *
 * eSagu API to reprice items on amazon.
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace eSagu\Amzn\RePricing\V1\Model;

use \ArrayAccess;

/**
 * RepricingCSVRequestDTO Class Doc Comment
 *
 * @category    Class
 * @description A CSV file export. A CSV file can be downloaded using the csvDownloadUrl when the state is DONE.
 * @package     eSagu\Amzn\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RepricingCSVRequestDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RepricingCSVRequestDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'csv_download_url' => 'string',
        'fields' => 'string[]',
        'number_format' => 'string',
        'public_csv_file_name' => 'string',
        'state' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'csv_download_url' => 'csvDownloadUrl',
        'fields' => 'fields',
        'number_format' => 'numberFormat',
        'public_csv_file_name' => 'publicCsvFileName',
        'state' => 'state'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'csv_download_url' => 'setCsvDownloadUrl',
        'fields' => 'setFields',
        'number_format' => 'setNumberFormat',
        'public_csv_file_name' => 'setPublicCsvFileName',
        'state' => 'setState'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'csv_download_url' => 'getCsvDownloadUrl',
        'fields' => 'getFields',
        'number_format' => 'getNumberFormat',
        'public_csv_file_name' => 'getPublicCsvFileName',
        'state' => 'getState'
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

    const FIELDS_SKU = 'SKU';
    const FIELDS_ASIN = 'ASIN';
    const FIELDS_TITLE = 'TITLE';
    const FIELDS_MIN_PRICE = 'MIN_PRICE';
    const FIELDS_MAX_PRICE = 'MAX_PRICE';
    const FIELDS_FIXED_PRICE = 'FIXED_PRICE';
    const FIELDS_PRICE_MODE = 'PRICE_MODE';
    const FIELDS_OPTIMIZED_PRICE = 'OPTIMIZED_PRICE';
    const FIELDS_EXCLUSION_CRITERIA_NAME = 'EXCLUSION_CRITERIA_NAME';
    const FIELDS_PRICE_GAPS_NAME = 'PRICE_GAPS_NAME';
    const FIELDS_SHIPPING_COSTS_NAME = 'SHIPPING_COSTS_NAME';
    const FIELDS_BUY_BOX_SETTINGS_NAME = 'BUY_BOX_SETTINGS_NAME';
    const FIELDS_NO_COMPETITOR_PRICE = 'NO_COMPETITOR_PRICE';
    const FIELDS_AMAZON_PRICE = 'AMAZON_PRICE';
    const FIELDS_INITIAL_PRICE = 'INITIAL_PRICE';
    const FIELDS_QUANTITY = 'QUANTITY';
    const FIELDS_FULFILLMENT_TYPE = 'FULFILLMENT_TYPE';
    const FIELDS_CHEAPEST_COMPETITOR_SELLER_ID = 'CHEAPEST_COMPETITOR_SELLER_ID';
    const FIELDS_CHEAPEST_COMPETITOR_PRICE = 'CHEAPEST_COMPETITOR_PRICE';
    const FIELDS_CHEAPEST_COMPETITOR_SHIPPING = 'CHEAPEST_COMPETITOR_SHIPPING';
    const FIELDS_CHEAPEST_COMPETITOR_FULFILLMENT_TYPE = 'CHEAPEST_COMPETITOR_FULFILLMENT_TYPE';
    const FIELDS_OFFER_COUNT = 'OFFER_COUNT';
    const FIELDS_BUY_BOX_OWNER_SELLER_ID = 'BUY_BOX_OWNER_SELLER_ID';
    const FIELDS_BUY_BOX_OWNER_PRICE = 'BUY_BOX_OWNER_PRICE';
    const FIELDS_BUY_BOX_OWNER_SHIPPING = 'BUY_BOX_OWNER_SHIPPING';
    const FIELDS_BUY_BOX_OWNER_FULFILLMENT_TYPE = 'BUY_BOX_OWNER_FULFILLMENT_TYPE';
    const FIELDS_BUY_BOX_COUNT = 'BUY_BOX_COUNT';
    const FIELDS_AMAZON_IN_TOP_20 = 'AMAZON_IN_TOP_20';
    const FIELDS_CUSTOM_CODE_SNIPPET_NAME = 'CUSTOM_CODE_SNIPPET_NAME';
    const FIELDS_CUSTOM_CODE_PAYLOAD = 'CUSTOM_CODE_PAYLOAD';
    const FIELDS_LEAD_TIME_FROM = 'LEAD_TIME_FROM';
    const FIELDS_LEAD_TIME_TO = 'LEAD_TIME_TO';
    const FIELDS_SHIPPING_COSTS = 'SHIPPING_COSTS';
    const FIELDS_ESAGU_ITEM_ID = 'ESAGU_ITEM_ID';
    const NUMBER_FORMAT_DECIMAL_DOT = 'DECIMAL_DOT';
    const NUMBER_FORMAT_DECIMAL_COMMA = 'DECIMAL_COMMA';
    const NUMBER_FORMAT_CENTS = 'CENTS';
    const STATE_NEW = 'NEW';
    const STATE_IN_PROGRESS = 'IN_PROGRESS';
    const STATE_DONE = 'DONE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFieldsAllowableValues()
    {
        return [
            self::FIELDS_SKU,
            self::FIELDS_ASIN,
            self::FIELDS_TITLE,
            self::FIELDS_MIN_PRICE,
            self::FIELDS_MAX_PRICE,
            self::FIELDS_FIXED_PRICE,
            self::FIELDS_PRICE_MODE,
            self::FIELDS_OPTIMIZED_PRICE,
            self::FIELDS_EXCLUSION_CRITERIA_NAME,
            self::FIELDS_PRICE_GAPS_NAME,
            self::FIELDS_SHIPPING_COSTS_NAME,
            self::FIELDS_BUY_BOX_SETTINGS_NAME,
            self::FIELDS_NO_COMPETITOR_PRICE,
            self::FIELDS_AMAZON_PRICE,
            self::FIELDS_INITIAL_PRICE,
            self::FIELDS_QUANTITY,
            self::FIELDS_FULFILLMENT_TYPE,
            self::FIELDS_CHEAPEST_COMPETITOR_SELLER_ID,
            self::FIELDS_CHEAPEST_COMPETITOR_PRICE,
            self::FIELDS_CHEAPEST_COMPETITOR_SHIPPING,
            self::FIELDS_CHEAPEST_COMPETITOR_FULFILLMENT_TYPE,
            self::FIELDS_OFFER_COUNT,
            self::FIELDS_BUY_BOX_OWNER_SELLER_ID,
            self::FIELDS_BUY_BOX_OWNER_PRICE,
            self::FIELDS_BUY_BOX_OWNER_SHIPPING,
            self::FIELDS_BUY_BOX_OWNER_FULFILLMENT_TYPE,
            self::FIELDS_BUY_BOX_COUNT,
            self::FIELDS_AMAZON_IN_TOP_20,
            self::FIELDS_CUSTOM_CODE_SNIPPET_NAME,
            self::FIELDS_CUSTOM_CODE_PAYLOAD,
            self::FIELDS_LEAD_TIME_FROM,
            self::FIELDS_LEAD_TIME_TO,
            self::FIELDS_SHIPPING_COSTS,
            self::FIELDS_ESAGU_ITEM_ID,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getNumberFormatAllowableValues()
    {
        return [
            self::NUMBER_FORMAT_DECIMAL_DOT,
            self::NUMBER_FORMAT_DECIMAL_COMMA,
            self::NUMBER_FORMAT_CENTS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_NEW,
            self::STATE_IN_PROGRESS,
            self::STATE_DONE,
        ];
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
        $this->container['csv_download_url'] = isset($data['csv_download_url']) ? $data['csv_download_url'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['number_format'] = isset($data['number_format']) ? $data['number_format'] : null;
        $this->container['public_csv_file_name'] = isset($data['public_csv_file_name']) ? $data['public_csv_file_name'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["DECIMAL_DOT", "DECIMAL_COMMA", "CENTS"];
        if (!in_array($this->container['number_format'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'number_format', must be one of 'DECIMAL_DOT', 'DECIMAL_COMMA', 'CENTS'.";
        }

        $allowed_values = ["NEW", "IN_PROGRESS", "DONE"];
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of 'NEW', 'IN_PROGRESS', 'DONE'.";
        }

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

        $allowed_values = ["DECIMAL_DOT", "DECIMAL_COMMA", "CENTS"];
        if (!in_array($this->container['number_format'], $allowed_values)) {
            return false;
        }
        $allowed_values = ["NEW", "IN_PROGRESS", "DONE"];
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets csv_download_url
     * @return string
     */
    public function getCsvDownloadUrl()
    {
        return $this->container['csv_download_url'];
    }

    /**
     * Sets csv_download_url
     * @param string $csv_download_url
     * @return $this
     */
    public function setCsvDownloadUrl($csv_download_url)
    {
        $this->container['csv_download_url'] = $csv_download_url;

        return $this;
    }

    /**
     * Gets fields
     * @return string[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     * @param string[] $fields
     * @return $this
     */
    public function setFields($fields)
    {
        $allowed_values = array('SKU', 'ASIN', 'TITLE', 'MIN_PRICE', 'MAX_PRICE', 'FIXED_PRICE', 'PRICE_MODE', 'OPTIMIZED_PRICE', 'EXCLUSION_CRITERIA_NAME', 'PRICE_GAPS_NAME', 'SHIPPING_COSTS_NAME', 'BUY_BOX_SETTINGS_NAME', 'NO_COMPETITOR_PRICE', 'AMAZON_PRICE', 'INITIAL_PRICE', 'QUANTITY', 'FULFILLMENT_TYPE', 'CHEAPEST_COMPETITOR_SELLER_ID', 'CHEAPEST_COMPETITOR_PRICE', 'CHEAPEST_COMPETITOR_SHIPPING', 'CHEAPEST_COMPETITOR_FULFILLMENT_TYPE', 'OFFER_COUNT', 'BUY_BOX_OWNER_SELLER_ID', 'BUY_BOX_OWNER_PRICE', 'BUY_BOX_OWNER_SHIPPING', 'BUY_BOX_OWNER_FULFILLMENT_TYPE', 'BUY_BOX_COUNT', 'AMAZON_IN_TOP_20', 'CUSTOM_CODE_SNIPPET_NAME', 'CUSTOM_CODE_PAYLOAD', 'LEAD_TIME_FROM', 'LEAD_TIME_TO', 'SHIPPING_COSTS', 'ESAGU_ITEM_ID');
        if (!is_null($fields) && (array_diff($fields, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'fields', must be one of 'SKU', 'ASIN', 'TITLE', 'MIN_PRICE', 'MAX_PRICE', 'FIXED_PRICE', 'PRICE_MODE', 'OPTIMIZED_PRICE', 'EXCLUSION_CRITERIA_NAME', 'PRICE_GAPS_NAME', 'SHIPPING_COSTS_NAME', 'BUY_BOX_SETTINGS_NAME', 'NO_COMPETITOR_PRICE', 'AMAZON_PRICE', 'INITIAL_PRICE', 'QUANTITY', 'FULFILLMENT_TYPE', 'CHEAPEST_COMPETITOR_SELLER_ID', 'CHEAPEST_COMPETITOR_PRICE', 'CHEAPEST_COMPETITOR_SHIPPING', 'CHEAPEST_COMPETITOR_FULFILLMENT_TYPE', 'OFFER_COUNT', 'BUY_BOX_OWNER_SELLER_ID', 'BUY_BOX_OWNER_PRICE', 'BUY_BOX_OWNER_SHIPPING', 'BUY_BOX_OWNER_FULFILLMENT_TYPE', 'BUY_BOX_COUNT', 'AMAZON_IN_TOP_20', 'CUSTOM_CODE_SNIPPET_NAME', 'CUSTOM_CODE_PAYLOAD', 'LEAD_TIME_FROM', 'LEAD_TIME_TO', 'SHIPPING_COSTS', 'ESAGU_ITEM_ID'");
        }
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets number_format
     * @return string
     */
    public function getNumberFormat()
    {
        return $this->container['number_format'];
    }

    /**
     * Sets number_format
     * @param string $number_format
     * @return $this
     */
    public function setNumberFormat($number_format)
    {
        $allowed_values = array('DECIMAL_DOT', 'DECIMAL_COMMA', 'CENTS');
        if (!is_null($number_format) && (!in_array($number_format, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'number_format', must be one of 'DECIMAL_DOT', 'DECIMAL_COMMA', 'CENTS'");
        }
        $this->container['number_format'] = $number_format;

        return $this;
    }

    /**
     * Gets public_csv_file_name
     * @return string
     */
    public function getPublicCsvFileName()
    {
        return $this->container['public_csv_file_name'];
    }

    /**
     * Sets public_csv_file_name
     * @param string $public_csv_file_name
     * @return $this
     */
    public function setPublicCsvFileName($public_csv_file_name)
    {
        $this->container['public_csv_file_name'] = $public_csv_file_name;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('NEW', 'IN_PROGRESS', 'DONE');
        if (!is_null($state) && (!in_array($state, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'NEW', 'IN_PROGRESS', 'DONE'");
        }
        $this->container['state'] = $state;

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
            return json_encode(\eSagu\Amzn\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\eSagu\Amzn\RePricing\V1\ObjectSerializer::sanitizeForSerialization($this));
    }
}

