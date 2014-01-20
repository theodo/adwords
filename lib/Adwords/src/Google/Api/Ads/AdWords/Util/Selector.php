<?php

namespace Google\Api\Ads\AdWords\Util;

/**
 * A generic selector to specify the type of information to return.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 */
class Selector
{
    /**
     * @access public
     * @var string[]
     */
    public $fields;

    /**
     * @access public
     * @var Predicate[]
     */
    public $predicates;

    /**
     * @access public
     * @var DateRange
     */
    public $dateRange;

    /**
     * @access public
     * @var OrderBy[]
     */
    public $ordering;

    /**
     * @access public
     * @var Paging
     */
    public $paging;

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
        return "Selector";
    }

    public function __construct(
        $fields = null,
        $predicates = null,
        $dateRange = null,
        $ordering = null,
        $paging = null
    ) {
        $this->fields = $fields;
        $this->predicates = $predicates;
        $this->dateRange = $dateRange;
        $this->ordering = $ordering;
        $this->paging = $paging;
    }
}
