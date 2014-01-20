<?php

namespace Google\Api\Ads\AdWords\Util;

/**
 * Specifies how an entity (eg. adgroup, campaign, criterion, ad) should be filtered.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 */
class Predicate
{
    /**
     * @access public
     * @var string
     */
    public $field;

    /**
     * @access public
     * @var tnsPredicateOperator
     */
    public $operator;

    /**
     * @access public
     * @var string[]
     */
    public $values;

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
        return "Predicate";
    }

    public function __construct($field = null, $operator = null, $values = null)
    {
        $this->field    = $field;
        $this->operator = $operator;
        $this->values   = $values;
    }
}
