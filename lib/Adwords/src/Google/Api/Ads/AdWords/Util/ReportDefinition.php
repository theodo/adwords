<?php

namespace Google\Api\Ads\AdWords\Util;

/**
 * Represents a report definition.
 *
 * @package    GoogleApiAdsAdWords
 * @subpackage Util
 */
class ReportDefinition
{
    /**
     * @access public
     * @var integer
     */
    public $id;

    /**
     * @access public
     * @var Selector
     */
    public $selector;

    /**
     * @access public
     * @var string
     */
    public $reportName;

    /**
     * @access public
     * @var tnsReportDefinitionReportType
     */
    public $reportType;

    /**
     * @access public
     * @var boolean
     */
    public $hasAttachment;

    /**
     * @access public
     * @var tnsReportDefinitionDateRangeType
     */
    public $dateRangeType;

    /**
     * @access public
     * @var tnsDownloadFormat
     */
    public $downloadFormat;

    /**
     * @access public
     * @var string
     */
    public $creationTime;

    /**
     * @access public
     * @var boolean
     */
    public $includeZeroImpressions;

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
        return "ReportDefinition";
    }

    public function __construct(
        $id = null,
        $selector = null,
        $reportName = null,
        $reportType = null,
        $hasAttachment = null,
        $dateRangeType = null,
        $downloadFormat = null,
        $creationTime = null,
        $includeZeroImpressions = null
    ) {
        $this->id                     = $id;
        $this->selector               = $selector;
        $this->reportName             = $reportName;
        $this->reportType             = $reportType;
        $this->hasAttachment          = $hasAttachment;
        $this->dateRangeType          = $dateRangeType;
        $this->downloadFormat         = $downloadFormat;
        $this->creationTime           = $creationTime;
        $this->includeZeroImpressions = $includeZeroImpressions;
    }
}
