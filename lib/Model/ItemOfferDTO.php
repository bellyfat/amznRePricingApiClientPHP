<?php
/**
 * ItemOfferDTO
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
 * ItemOfferDTO Class Doc Comment
 *
 * @category    Class
 * @description A offer on amzn. An offer contains information about an offer on a item. The exclusion reasons are computed by the item&#39;Äs exclusion criteria. The gap is computed by the item&#39;s price gap. The the comparedTo flag marks the offer which was used as repricing target.
 * @package     eSagu\Amzn\RePricing\V1
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemOfferDTO implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemOfferDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'compared_to' => 'bool',
        'exclusion_reasons' => 'string[]',
        'feedback_count' => 'int',
        'flags' => 'string[]',
        'item_condition' => 'string',
        'listing_price' => 'int',
        'price_gap' => 'int',
        'seller_id' => 'string',
        'seller_positive_feedback_rating' => 'int',
        'shipping' => 'int',
        'shipping_time' => 'int[]',
        'ships_from' => 'string'
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
        'compared_to' => 'comparedTo',
        'exclusion_reasons' => 'exclusionReasons',
        'feedback_count' => 'feedbackCount',
        'flags' => 'flags',
        'item_condition' => 'itemCondition',
        'listing_price' => 'listingPrice',
        'price_gap' => 'priceGap',
        'seller_id' => 'sellerId',
        'seller_positive_feedback_rating' => 'sellerPositiveFeedbackRating',
        'shipping' => 'shipping',
        'shipping_time' => 'shippingTime',
        'ships_from' => 'shipsFrom'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'compared_to' => 'setComparedTo',
        'exclusion_reasons' => 'setExclusionReasons',
        'feedback_count' => 'setFeedbackCount',
        'flags' => 'setFlags',
        'item_condition' => 'setItemCondition',
        'listing_price' => 'setListingPrice',
        'price_gap' => 'setPriceGap',
        'seller_id' => 'setSellerId',
        'seller_positive_feedback_rating' => 'setSellerPositiveFeedbackRating',
        'shipping' => 'setShipping',
        'shipping_time' => 'setShippingTime',
        'ships_from' => 'setShipsFrom'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'compared_to' => 'getComparedTo',
        'exclusion_reasons' => 'getExclusionReasons',
        'feedback_count' => 'getFeedbackCount',
        'flags' => 'getFlags',
        'item_condition' => 'getItemCondition',
        'listing_price' => 'getListingPrice',
        'price_gap' => 'getPriceGap',
        'seller_id' => 'getSellerId',
        'seller_positive_feedback_rating' => 'getSellerPositiveFeedbackRating',
        'shipping' => 'getShipping',
        'shipping_time' => 'getShippingTime',
        'ships_from' => 'getShipsFrom'
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

    const EXCLUSION_REASONS_SELLER_ID = 'SELLER_ID';
    const EXCLUSION_REASONS_FULFILLMENT_TYPE = 'FULFILLMENT_TYPE';
    const EXCLUSION_REASONS_RATING = 'RATING';
    const EXCLUSION_REASONS_SHIPPING_TIME = 'SHIPPING_TIME';
    const EXCLUSION_REASONS_ONLY_FEATURED_MERCHANT = 'ONLY_FEATURED_MERCHANT';
    const EXCLUSION_REASONS_SHIPS_FROM = 'SHIPS_FROM';
    const EXCLUSION_REASONS_MY_OWN_OFFER = 'MY_OWN_OFFER';
    const FLAGS_IS_FULFILLED_BY_AMAZON = 'IS_FULFILLED_BY_AMAZON';
    const FLAGS_IS_BUY_BOX_WINNER = 'IS_BUY_BOX_WINNER';
    const FLAGS_IS_EXPEDITED_SHIPPING_AVAILABLE = 'IS_EXPEDITED_SHIPPING_AVAILABLE';
    const FLAGS_IS_FEATURED_MERCHANT = 'IS_FEATURED_MERCHANT';
    const FLAGS_SHIPS_DOMESTICALLY = 'SHIPS_DOMESTICALLY';
    const FLAGS_SHIPS_INTERNATIONALLY = 'SHIPS_INTERNATIONALLY';
    const ITEM_CONDITION_UNKNOWN = 'UNKNOWN';
    const ITEM_CONDITION_USED_LIKE_NEW = 'USED_LIKE_NEW';
    const ITEM_CONDITION_USED_VERY_GOOD = 'USED_VERY_GOOD';
    const ITEM_CONDITION_USED_GOOD = 'USED_GOOD';
    const ITEM_CONDITION_USED_ACCEPTABLE = 'USED_ACCEPTABLE';
    const ITEM_CONDITION_COLLECTIBLE_LIKE_NEW = 'COLLECTIBLE_LIKE_NEW';
    const ITEM_CONDITION_COLLECTIBLE_VERY_GOOD = 'COLLECTIBLE_VERY_GOOD';
    const ITEM_CONDITION_COLLECTIBLE_GOOD = 'COLLECTIBLE_GOOD';
    const ITEM_CONDITION_COLLECTIBLE_ACCEPTABLE = 'COLLECTIBLE_ACCEPTABLE';
    const ITEM_CONDITION_USED_REFURBISHED = 'USED_REFURBISHED';
    const ITEM_CONDITION_REFURBISHED = 'REFURBISHED';
    const ITEM_CONDITION_NEW = 'NEW';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getExclusionReasonsAllowableValues()
    {
        return [
            self::EXCLUSION_REASONS_SELLER_ID,
            self::EXCLUSION_REASONS_FULFILLMENT_TYPE,
            self::EXCLUSION_REASONS_RATING,
            self::EXCLUSION_REASONS_SHIPPING_TIME,
            self::EXCLUSION_REASONS_ONLY_FEATURED_MERCHANT,
            self::EXCLUSION_REASONS_SHIPS_FROM,
            self::EXCLUSION_REASONS_MY_OWN_OFFER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFlagsAllowableValues()
    {
        return [
            self::FLAGS_IS_FULFILLED_BY_AMAZON,
            self::FLAGS_IS_BUY_BOX_WINNER,
            self::FLAGS_IS_EXPEDITED_SHIPPING_AVAILABLE,
            self::FLAGS_IS_FEATURED_MERCHANT,
            self::FLAGS_SHIPS_DOMESTICALLY,
            self::FLAGS_SHIPS_INTERNATIONALLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getItemConditionAllowableValues()
    {
        return [
            self::ITEM_CONDITION_UNKNOWN,
            self::ITEM_CONDITION_USED_LIKE_NEW,
            self::ITEM_CONDITION_USED_VERY_GOOD,
            self::ITEM_CONDITION_USED_GOOD,
            self::ITEM_CONDITION_USED_ACCEPTABLE,
            self::ITEM_CONDITION_COLLECTIBLE_LIKE_NEW,
            self::ITEM_CONDITION_COLLECTIBLE_VERY_GOOD,
            self::ITEM_CONDITION_COLLECTIBLE_GOOD,
            self::ITEM_CONDITION_COLLECTIBLE_ACCEPTABLE,
            self::ITEM_CONDITION_USED_REFURBISHED,
            self::ITEM_CONDITION_REFURBISHED,
            self::ITEM_CONDITION_NEW,
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
        $this->container['compared_to'] = isset($data['compared_to']) ? $data['compared_to'] : null;
        $this->container['exclusion_reasons'] = isset($data['exclusion_reasons']) ? $data['exclusion_reasons'] : null;
        $this->container['feedback_count'] = isset($data['feedback_count']) ? $data['feedback_count'] : null;
        $this->container['flags'] = isset($data['flags']) ? $data['flags'] : null;
        $this->container['item_condition'] = isset($data['item_condition']) ? $data['item_condition'] : null;
        $this->container['listing_price'] = isset($data['listing_price']) ? $data['listing_price'] : null;
        $this->container['price_gap'] = isset($data['price_gap']) ? $data['price_gap'] : null;
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
        $this->container['seller_positive_feedback_rating'] = isset($data['seller_positive_feedback_rating']) ? $data['seller_positive_feedback_rating'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['shipping_time'] = isset($data['shipping_time']) ? $data['shipping_time'] : null;
        $this->container['ships_from'] = isset($data['ships_from']) ? $data['ships_from'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = ["UNKNOWN", "USED_LIKE_NEW", "USED_VERY_GOOD", "USED_GOOD", "USED_ACCEPTABLE", "COLLECTIBLE_LIKE_NEW", "COLLECTIBLE_VERY_GOOD", "COLLECTIBLE_GOOD", "COLLECTIBLE_ACCEPTABLE", "USED_REFURBISHED", "REFURBISHED", "NEW"];
        if (!in_array($this->container['item_condition'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'item_condition', must be one of 'UNKNOWN', 'USED_LIKE_NEW', 'USED_VERY_GOOD', 'USED_GOOD', 'USED_ACCEPTABLE', 'COLLECTIBLE_LIKE_NEW', 'COLLECTIBLE_VERY_GOOD', 'COLLECTIBLE_GOOD', 'COLLECTIBLE_ACCEPTABLE', 'USED_REFURBISHED', 'REFURBISHED', 'NEW'.";
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

        $allowed_values = ["UNKNOWN", "USED_LIKE_NEW", "USED_VERY_GOOD", "USED_GOOD", "USED_ACCEPTABLE", "COLLECTIBLE_LIKE_NEW", "COLLECTIBLE_VERY_GOOD", "COLLECTIBLE_GOOD", "COLLECTIBLE_ACCEPTABLE", "USED_REFURBISHED", "REFURBISHED", "NEW"];
        if (!in_array($this->container['item_condition'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets compared_to
     * @return bool
     */
    public function getComparedTo()
    {
        return $this->container['compared_to'];
    }

    /**
     * Sets compared_to
     * @param bool $compared_to
     * @return $this
     */
    public function setComparedTo($compared_to)
    {
        $this->container['compared_to'] = $compared_to;

        return $this;
    }

    /**
     * Gets exclusion_reasons
     * @return string[]
     */
    public function getExclusionReasons()
    {
        return $this->container['exclusion_reasons'];
    }

    /**
     * Sets exclusion_reasons
     * @param string[] $exclusion_reasons
     * @return $this
     */
    public function setExclusionReasons($exclusion_reasons)
    {
        $allowed_values = array('SELLER_ID', 'FULFILLMENT_TYPE', 'RATING', 'SHIPPING_TIME', 'ONLY_FEATURED_MERCHANT', 'SHIPS_FROM', 'MY_OWN_OFFER');
        if (!is_null($exclusion_reasons) && (array_diff($exclusion_reasons, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'exclusion_reasons', must be one of 'SELLER_ID', 'FULFILLMENT_TYPE', 'RATING', 'SHIPPING_TIME', 'ONLY_FEATURED_MERCHANT', 'SHIPS_FROM', 'MY_OWN_OFFER'");
        }
        $this->container['exclusion_reasons'] = $exclusion_reasons;

        return $this;
    }

    /**
     * Gets feedback_count
     * @return int
     */
    public function getFeedbackCount()
    {
        return $this->container['feedback_count'];
    }

    /**
     * Sets feedback_count
     * @param int $feedback_count
     * @return $this
     */
    public function setFeedbackCount($feedback_count)
    {
        $this->container['feedback_count'] = $feedback_count;

        return $this;
    }

    /**
     * Gets flags
     * @return string[]
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     * @param string[] $flags
     * @return $this
     */
    public function setFlags($flags)
    {
        $allowed_values = array('IS_FULFILLED_BY_AMAZON', 'IS_BUY_BOX_WINNER', 'IS_EXPEDITED_SHIPPING_AVAILABLE', 'IS_FEATURED_MERCHANT', 'SHIPS_DOMESTICALLY', 'SHIPS_INTERNATIONALLY');
        if (!is_null($flags) && (array_diff($flags, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'flags', must be one of 'IS_FULFILLED_BY_AMAZON', 'IS_BUY_BOX_WINNER', 'IS_EXPEDITED_SHIPPING_AVAILABLE', 'IS_FEATURED_MERCHANT', 'SHIPS_DOMESTICALLY', 'SHIPS_INTERNATIONALLY'");
        }
        $this->container['flags'] = $flags;

        return $this;
    }

    /**
     * Gets item_condition
     * @return string
     */
    public function getItemCondition()
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition
     * @param string $item_condition
     * @return $this
     */
    public function setItemCondition($item_condition)
    {
        $allowed_values = array('UNKNOWN', 'USED_LIKE_NEW', 'USED_VERY_GOOD', 'USED_GOOD', 'USED_ACCEPTABLE', 'COLLECTIBLE_LIKE_NEW', 'COLLECTIBLE_VERY_GOOD', 'COLLECTIBLE_GOOD', 'COLLECTIBLE_ACCEPTABLE', 'USED_REFURBISHED', 'REFURBISHED', 'NEW');
        if (!is_null($item_condition) && (!in_array($item_condition, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'item_condition', must be one of 'UNKNOWN', 'USED_LIKE_NEW', 'USED_VERY_GOOD', 'USED_GOOD', 'USED_ACCEPTABLE', 'COLLECTIBLE_LIKE_NEW', 'COLLECTIBLE_VERY_GOOD', 'COLLECTIBLE_GOOD', 'COLLECTIBLE_ACCEPTABLE', 'USED_REFURBISHED', 'REFURBISHED', 'NEW'");
        }
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets listing_price
     * @return int
     */
    public function getListingPrice()
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price
     * @param int $listing_price
     * @return $this
     */
    public function setListingPrice($listing_price)
    {
        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets price_gap
     * @return int
     */
    public function getPriceGap()
    {
        return $this->container['price_gap'];
    }

    /**
     * Sets price_gap
     * @param int $price_gap
     * @return $this
     */
    public function setPriceGap($price_gap)
    {
        $this->container['price_gap'] = $price_gap;

        return $this;
    }

    /**
     * Gets seller_id
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id
     * @param string $seller_id
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets seller_positive_feedback_rating
     * @return int
     */
    public function getSellerPositiveFeedbackRating()
    {
        return $this->container['seller_positive_feedback_rating'];
    }

    /**
     * Sets seller_positive_feedback_rating
     * @param int $seller_positive_feedback_rating
     * @return $this
     */
    public function setSellerPositiveFeedbackRating($seller_positive_feedback_rating)
    {
        $this->container['seller_positive_feedback_rating'] = $seller_positive_feedback_rating;

        return $this;
    }

    /**
     * Gets shipping
     * @return int
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     * @param int $shipping
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets shipping_time
     * @return int[]
     */
    public function getShippingTime()
    {
        return $this->container['shipping_time'];
    }

    /**
     * Sets shipping_time
     * @param int[] $shipping_time
     * @return $this
     */
    public function setShippingTime($shipping_time)
    {
        $this->container['shipping_time'] = $shipping_time;

        return $this;
    }

    /**
     * Gets ships_from
     * @return string
     */
    public function getShipsFrom()
    {
        return $this->container['ships_from'];
    }

    /**
     * Sets ships_from
     * @param string $ships_from
     * @return $this
     */
    public function setShipsFrom($ships_from)
    {
        $this->container['ships_from'] = $ships_from;

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

