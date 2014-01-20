<?php

namespace Google\Api\Ads\AdWords\Util;


class DownloadFormat
{
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
        return "DownloadFormat";
    }

    public function __construct()
    {
        if (get_parent_class('DownloadFormat')) {
            parent::__construct();
        }
    }
} 