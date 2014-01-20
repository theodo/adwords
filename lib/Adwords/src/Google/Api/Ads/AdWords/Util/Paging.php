<?php

namespace Google\Api\Ads\AdWords\Util;

/**
 * Specifies the page of results to return in the response. A page is specified
 * by the result position to start at and the maximum number of results to
 * return.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 */
class Paging
{
    /**
     * @access public
     * @var integer
     */
    public $startIndex;

    /**
     * @access public
     * @var integer
     */
    public $numberResults;

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
        return "Paging";
    }

    public function __construct($startIndex = null, $numberResults = null)
    {
        $this->startIndex    = $startIndex;
        $this->numberResults = $numberResults;
    }
}
