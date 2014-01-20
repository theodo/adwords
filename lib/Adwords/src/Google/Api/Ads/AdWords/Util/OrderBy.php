<?php

namespace Google\Api\Ads\AdWords\Util;

/**
 * Specifies how the resulting information should be sorted.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 */
class OrderBy
{
    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var tnsSortOrder
     */
    public $sortOrder;

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
        return "OrderBy";
    }

    public function __construct($field = null, $sortOrder = null)
    {
        $this->field     = $field;
        $this->sortOrder = $sortOrder;
    }
}