<?php

namespace Google\Api\Ads\AdWords\Util;

/**
 * Represents a range of dates that has either an upper or a lower bound.
 * The format for the date is YYYYMMDD.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 */
class DateRange
{
    /**
     * @access public
     * @var string
     */
    public $min;

    /**
     * @access public
     * @var string
     */
    public $max;

    /**
     * Gets the namesapce of this class
     *
     * @return the namespace of this class
     */
    public function getNamespace()
    {
        return "";
    }

    /**
     * Gets the xsi:type name of this class
     *
     * @return the xsi:type name of this class
     */
    public function getXsiTypeName()
    {
        return "DateRange";
    }

    public function __construct($min = null, $max = null)
    {
        $this->min = $min;
        $this->max = $max;
    }
}